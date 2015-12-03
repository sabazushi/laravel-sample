<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HogeControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetIndex()
    {
        $this->visit('sample/hoge')->see('文字');
    }

    public function testPostCreate()
    {
        $this->visit('sample/hoge')->type('hoge', 'body')->press('submit')->seePageIs('sample/hoge/create');
    }

    public function testGetList()
    {
        $this->visit('sample/hoge/list')->see('リスト');
    }
}
