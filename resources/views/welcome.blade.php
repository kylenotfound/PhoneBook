@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-12 mb-2">
      <div id="postcontent">
        <h2>Welcome to the PhoneBook</h2>
        <h4>Login to access your own personal PhoneBook</h4>
        <hr>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-7 col-md-push-5 col-lg-8 col-lg-push-4">
            <p>
              <strong>The PhoneBook is an easy way to backup your PhoneBook.</strong><br>
              Also access our public database full of records!<br>
            </p>
          </div>
        </div>
        @if(count($records) > 0)
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Record Id</th>
                <th>Building Name</th>
                <th>Building Address</th>
                <th>Building Phone Number</th>
                <th>User Submitted</th>
                <th>Created At</th>
                <th>Updated At</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($records as $record)
                <tr>
                  <td>{{ $record->getId() }}</td>
                  <td>{{ $record->getBuildingName() }}</td>
                  <td>{{ $record->getAddress() }}</td>
                  <td>{{ $record->getPhoneNumber() }}</td>
                  <td>{{ $record->getSubmittedName() }}</td>
                  <td>{{ $record->getFormattedCreatedAt() }}</td>
                  <td>{{ $record->getFormattedUpdatedAt() }}</td>
                </tr>
              @endforeach
            </tbody>
          </table> 
        @endif 
        <p>
          If this is your first time you might want to read more <a href="about">about the PhoneBook</a>
        </p>
      </div>
    </div>
  </div>
@endsection