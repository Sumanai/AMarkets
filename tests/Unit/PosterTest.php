<?php

namespace Tests\Unit;

use App\Models\Poster;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PosterTest extends TestCase
{
    use RefreshDatabase;

    public function testCreate_Ok()
    {
        $poster = new Poster([
            'name' => 'test_Ok',
            'start_date' => '2019-02-19',
            'end_date' => '2019-03-21',
        ]);
        $this->assertTrue($poster->save());

        // TODO: Проверить, почему это не работает
        // $this->assertSame('test_Ok', $poster->name);
    }

    public function testCreateDublicate_Fail()
    {
        $poster = new Poster([
            'name' => 'test_Ok',
            'start_date' => '2019-02-19',
            'end_date' => '2019-03-21',
        ]);
        $this->assertTrue($poster->save());

        $this->expectException(QueryException::class);
        $poster = new Poster([
            'name' => 'test_Ok',
            'start_date' => '2019-02-19',
            'end_date' => '2019-03-21',
        ]);
        $poster->save();
    }
}
