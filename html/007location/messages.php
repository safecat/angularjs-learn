<?php
echo json_encode([
  ['id'=>0, 'sender'=>'asdfadf', 'subject'=>'asdf', 'date'=>'date', 'recipients'=>['xxy'], 'message'=>'a'],
]);
header('Content-Type: application/json');