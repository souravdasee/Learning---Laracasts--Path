<?php

class Conversation
{

}

$obj = new Conversation;

$type = match ($obj::class) {
    'Conversation' => 'started_conversation',
    'Reply' => 'replied_on_conversation',
    'Comment' => 'commented_on_lesson'
};

echo $type;