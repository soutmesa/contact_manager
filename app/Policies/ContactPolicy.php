<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Contact;

class ContactPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function modify(User $user, Contact $contact)
    {
        // return $user->id === $contact->user_id;
        return $user->id == $contact->user_id;
    }
}
