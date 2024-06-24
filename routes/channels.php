<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Contoh channel untuk broadcast data user berdasarkan ID
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Contoh channel untuk broadcast chat room berdasarkan ID room
Broadcast::channel('chat.{roomId}', function ($user, $roomId) {
    // Return true jika user terotorisasi untuk mendengarkan channel
    return true; // Implementasikan logika otorisasi sesuai kebutuhan
});
