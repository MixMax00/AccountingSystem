<?php

namespace Database\Seeders;

use App\Models\Head;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $node = Head::create([
            [
                'category_name' => 'Books',
                'code'          => 01,
                'type'          => "expense",
                'children' => [
                    [
                        'category_name' => 'Comic Book',
                        'code'          => 0101,
                        'type'          => "expense",
                        'children' => [
                            [
                                'category_name' => 'Marvel Comic Book',
                                'code'          => 010101,
                                'type'          => "expense",
                            ],
                            [
                                'category_name' => 'DC Comic Book',
                                'code'          => 010102,
                                'type'          => "expense",
                            ],
                            [
                                'category_name' => 'Action comics',
                                'code'          => 010103,
                                'type'          => "expense",
                            ],
                        ],
                    ],
                    [
                        'category_name' => 'Textbooks',
                        'code'          => 0102,
                        'type'          => "expense",
                            'children' => [
                                [
                                    'category_name' => 'Business',
                                    'code'          => 010201,
                                    'type'          => "expense",
                                ],
                                [
                                    'category_name' => 'Finance',
                                    'code'          => 010202,
                                    'type'          => "expense",
                                ],
                                [
                                    'category_name' => 'Computer Science',
                                    'code'          => 010203,
                                    'type'          => "expense",
                                ],
                        ],
                    ],
                ],
            ],
            [
                'category_name' => 'Electronics',
                'code'          => 02,
                'type'          => "expense",
                'children' => [
                    [
                        'category_name' => 'TV',
                        'code'          => 0201,
                        'type'          => "expense",
                        'children' => [
                            [
                                'category_name' => 'LED',
                                'code'          => 020101,
                                'type'          => "expense",
                            ],
                            [
                                'category_name' => 'Blu-ray',
                                'code'          => 020102,
                                'type'          => "expense",
                            ],
                        ],
                    ],
                    [
                        'category_name' => 'Mobile',
                        'code'          => 0202,
                        'type'          => "expense",
                        'children' => [
                            [
                                'category_name' => 'Samsung',
                                'code'          => 020201,
                                'type'          => "expense",
                            ],
                            [
                                'category_name' => 'iPhone',
                                'code'          => 020202,
                                'type'          => "expense",
                            ],
                            [
                                'category_name' => 'Xiomi',
                                'code'          => 020203,
                                'type'          => "expense",
                            ],
                        ],
                    ],
                ],
            ],
        ]);



        $node->children;

    }
}
