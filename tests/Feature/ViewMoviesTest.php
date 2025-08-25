<?php

test('the application returns a successful response', function () {
      $response = $this->get('/');

    $response->assertStatus(200);
});




test('about page index', function(){

    $response = $this->get(route('movies.index'));

    $response->assertSuccessful();
    $response->assertSee('popular movies');
   

});









