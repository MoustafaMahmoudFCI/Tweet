<div class="flex items-center mt-3 ">
    <form action="{{ route('like.store' , $tweet->id) }}" method="post">
        @csrf
     <div class="mr-4 {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500':'text-gray-500' }}">
         <button type="submit" class="text-sm">
             <i class="fas fa-thumbs-up"></i>
             {{ $tweet->likes ?: 0 }}
         </button>
     </div>
    </form>
    <form action="{{ route('like.destroy' , $tweet->id) }}" method="post">
        @csrf
        @method('DELETE')
         <div class="{{ $tweet->isDisLikedBy(current_user()) ? 'text-blue-500':'text-gray-500' }}">
             <button type="submit" class="text-sm">
                 <i class="fas fa-thumbs-down"></i>
                 {{ $tweet->dislikes ?: 0 }}
             </button>
         </div>
     </form>
 </div>
