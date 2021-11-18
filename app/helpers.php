<?php

use App\Models\Contact;

function contact_massage_count()
{
    return Contact::where('action', 1)->count();
}
