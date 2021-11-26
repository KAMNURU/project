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
               <div class="mb-3">
                   <form action="{{url('submit_Book')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
  <label for="author" class="form-label">Author</label>
  <input type="text"  name="author" class="form-control" id="exampleFormControlInput1" >
</div>
<div class="mb-3">
  <label for="book" class="form-label">Add Book</label>
  <input type="file" name="book"  class="form-control" id="book" >
</div>
<div class="mb-3">
  <label for="link" class="form-label">Link</label>
  <input type="text"  name="link" class="form-control" id="link" >
</div>
<div class="mb-3">
    <button type="submit" name="submit"  class="btn btn-primary">Add</button>
</div>
</form>
                
        </div>
            </div>
        </div>
    </div>
</x-app-layout>
