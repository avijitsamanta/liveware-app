<div class="px-4 space-y-4 mt-8">
    <form method="get">
        <input class="border-solid border border-gray-300 p-2 w-full md:w-1/4" 
            type="text" placeholder="Search Users" wire:model="term"/>
    </form>

    <div>

        <table class="table-auto" style="width: 100%;">
    
          <thead>
    
            <tr>
    
              <th class="px-4 py-2">ID</th>
    
              <th class="px-4 py-2">Name</th>
    
              <th class="px-4 py-2">Email</th>
    
            </tr>
    
          </thead>
    
          <tbody>
    
            @foreach ($users as $user)
    
                <tr>
    
                <td class="border px-4 py-2">{{ $user->id }}</td>
    
                <td class="border px-4 py-2">{{ $user->name }}</td>
    
                <td class="border px-4 py-2">{{ $user->email }}</td>
    
                </tr>
    
            @endforeach
    
          </tbody>
    
        </table>
    
      
    
        {{ $users->links() }}
    
    </div>

</div>
    
        