<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Email Verified At</th>
                            <th scope="col">Photo</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $sl=>$user)
                                
                            <tr>
                              <td>{{$sl+1}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->email_verified_at}}</td>
                              <td>{{$user->photo}}</td>
                            </tr>

                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
