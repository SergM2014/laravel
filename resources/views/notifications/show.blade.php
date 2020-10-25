



    <div class="container">
        Show all notification for user

        <ul>
            @foreach($notifications as $notification)
                <li>{{ $notification->type }}</li>
            @endforeach
        </ul>


    </div>
