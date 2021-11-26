<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<div>
               <a href="{{url('add_book')}}">Add Books</a> 
               </div>

                <table class="table">
  <thead>
    <tr>
      <th scope="col">S.n</th>
      <th scope="col">Book</th>
      <th scope="col">Author</th>
      <th scope="col">View</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
