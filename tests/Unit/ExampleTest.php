<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

  /*  public function testTitlesModelCount(){
      $title = new Title;
      ##$value = 1;
      ##$this->assertTrue(1 === $value, 'Value should be one');
      $this->assertTrue(count($title->all()) === 6, 'it should have six titles');

    }

    public function TestLastTitleShouldBeProfessor() {
      $title = new Title;
      $titles_array = $titles->all();
      $this->assertEquals('Professor', array_pop($titles_array), 'Titles last element should be professor');
    }*/




}
