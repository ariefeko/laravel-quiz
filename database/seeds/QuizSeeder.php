<?php

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Option;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quiz = Quiz::create(['name' => 'Quiz 1']);

        $questions = [            
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu tiba-tiba merasa lelah?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa cemas?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa cemas sampai tidak bisa menenangkan diri sendiri meskipun ada bantuan?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa putus asa?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa gelisah atau tidak tenang?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa sangat gelisah sampai kamu tidak bisa tidur dengan tenang?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa depresi/sedih yang mendalam?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa sulit melakukan sesuatu yang biasanya mudah dilakukan?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa sangat sedih sampai tidak ada yang dapat membuat kamu terhibur?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa tidak berharga?'
            ],
            [
                'quiz_id' => $quiz->id,
                'question' => 'Dalam 4 minggu terakhir, seberapa sering kamu merasa tidak mampu menangani masalahmu sendiri?'
            ],
        ];

        foreach ($questions as $q) {
            $question = Question::create($q);

            $options = [
                [
                    'question_id' => $question->id,
                    'name' => 'Tidak Pernah',
                    'score' => 1
                ],
                [
                    'question_id' => $question->id,
                    'name' => 'Jarang',
                    'score' => 2
                ],
                [
                    'question_id' => $question->id,
                    'name' => 'Kadang-kadang',
                    'score' => 3
                ],
                [
                    'question_id' => $question->id,
                    'name' => 'Sering',
                    'score' => 4
                ],
                [
                    'question_id' => $question->id,
                    'name' => 'Selalu',
                    'score' => 5
                ],
            ];

            foreach ($options as $o) {
                Option::create($o); 
            }
        }

        

        
    }
}
