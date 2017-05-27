<?php
return function($site, $pages, $page) {
  $alert = null;
  $class = null;
  if(get('submit')) {
    $data = array(
      'name'  => get('name'),
      'email' => get('email'),
      'text'  => get('text')
    );
    $rules = array(
      'name'  => array('required'),
      'email' => array('required', 'email'),
      'text'  => array('required', 'min' => 3, 'max' => 3000),
    );
    $messages = array(
      'name'  => 'Please enter a valid name',
      'email' => 'Please enter a valid email address',
      'text'  => 'Please enter a text between 3 and 3000 characters'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'amy@a-web-strategy.co.uk',
        'from'    => 'amykw105@gmail.com',
        'subject' => 'New contact request',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        //go('contact');
        $class = 'success';
        $alert = array('Thank you!', 'Your email has been sent', 'I\'ll get back to you as soon as I can');
      // add the error to the alert list if it failed
      } else {
        $class = 'error';
        $alert = array($email->error());
      }
    }
  }
  return compact('alert', 'class');
};
