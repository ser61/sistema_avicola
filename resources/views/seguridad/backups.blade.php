@extends('layouts.fondo')

@section('content')
  <h3>Administer Database Backups</h3>
  <div class="row">
    <div class="col-xs-12 clearfix">
      <a id="create-new-backup-button" href="{{ url('backup/create') }}" class="btn btn-primary pull-right"
         style="margin-bottom:2em;"><i
          class="fa fa-plus"></i> Create New Backup
      </a>
    </div>
    <div class="col-xs-12">
      @include('alertas.logrado')
      @include('alertas.error')
      @if (count($backups))

        <table class="table table-striped table-bordered">
          <thead>
          <tr>
            <th>File</th>
            <th>Size</th>
            <th>Date</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($backups as $backup)
            <tr>
              <td>{{ $backup['file_name'] }}</td>
              <td>{{ round((int)$backup['file_size']/1048576, 2).' MB' }}</td>
              <td>
                {{ \Carbon\Carbon::createFromTimeStamp($backup['last_modified'])->formatLocalized('%d %B %Y, %H:%M') }}
              </td>
              <td class="text-right">
                @if ($backup['download'])
                  <a class="btn btn-xs btn-default" href="{{ url(config('backpack.base.route_prefix', 'admin').'/backup/download/') }}?disk={{ $backup['disk'] }}&path={{ urlencode($backup['file_path']) }}&file_name={{ urlencode($backup['file_name']) }}"><i class="fa fa-cloud-download"></i> {{ trans('backpack::backup.download') }}</a>
                @endif
                <a class="btn btn-xs btn-danger" data-button-type="delete" href="{{ url(config('backpack.base.route_prefix', 'admin').'/backup/delete/'.$backup['file_name']) }}?disk={{ $backup['disk'] }}"><i class="fa fa-trash-o"></i> {{ trans('backpack::backup.delete') }}</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      @else
        <div class="well">
          <h4>There are no backups</h4>
        </div>
      @endif
    </div>
  </div>

  <script>
    function comenzar(){
      // capture the Create new backup button
      $("#create-new-backup-button").click(function(e) {
        e.preventDefault();
        var create_backup_url = $(this).attr('href');
        // Create a new instance of ladda for the specified button
        var l = Ladda.create( document.querySelector( '#create-new-backup-button' ) );

        // Start loading
        l.start();

        // Will display a progress bar for 10% of the button width
        l.setProgress( 0.3 );

        setTimeout(function(){ l.setProgress( 0.6 ); }, 2000);

        // do the backup through ajax
        $.ajax({
          url: create_backup_url,
          type: 'PUT',
          success: function(result) {
            l.setProgress( 0.9 );
            // Show an alert with the result
            if (result.indexOf('failed') >= 0) {
              new PNotify({
                title: "{{ trans('backpack::backup.create_warning_title') }}",
                text: "{{ trans('backpack::backup.create_warning_message') }}",
                type: "warning"
              });
            }
            else
            {
              new PNotify({
                title: "{{ trans('backpack::backup.create_confirmation_title') }}",
                text: "{{ trans('backpack::backup.create_confirmation_message') }}",
                type: "success"
              });
            }

            // Stop loading
            l.setProgress( 1 );
            l.stop();

            // refresh the page to show the new file
            setTimeout(function(){ location.reload(); }, 3000);
          },
          error: function(result) {
            l.setProgress( 0.9 );
            // Show an alert with the result
            new PNotify({
              title: "{{ trans('backpack::backup.create_error_title') }}",
              text: "{{ trans('backpack::backup.create_error_message') }}",
              type: "warning"
            });
            // Stop loading
            l.stop();
          }
        });
      });

      // capture the delete button
      $("[data-button-type=delete]").click(function(e) {
        e.preventDefault();
        var delete_button = $(this);
        var delete_url = $(this).attr('href');

        if (confirm("{{ trans('backpack::backup.delete_confirm') }}") == true) {
          $.ajax({
            url: delete_url,
            type: 'DELETE',
            success: function(result) {
              // Show an alert with the result
              new PNotify({
                title: "{{ trans('backpack::backup.delete_confirmation_title') }}",
                text: "{{ trans('backpack::backup.delete_confirmation_message') }}",
                type: "success"
              });
              // delete the row from the table
              delete_button.parentsUntil('tr').parent().remove();
            },
            error: function(result) {
              // Show an alert with the result
              new PNotify({
                title: "{{ trans('backpack::backup.delete_error_title') }}",
                text: "{{ trans('backpack::backup.delete_error_message') }}",
                type: "warning"
              });
            }
          });
        } else {
          new PNotify({
            title: "{{ trans('backpack::backup.delete_cancel_title') }}",
            text: "{{ trans('backpack::backup.delete_cancel_message') }}",
            type: "info"
          });
        }
      });
    }
    window.addEventListener("load",comenzar, false);
  </script>
@endsection