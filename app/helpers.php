<?php

use App\Models\Contact;
use App\Models\News;
use App\Models\WorkProcess;

function contact_massage_count()
{
    return Contact::where('action', 1)->count();
}

function latestNews()
{
    return News::where('action', 2)->limit(3)->get();
}

function workProcess()
{
    return WorkProcess::where('action', 2)->get();
}
