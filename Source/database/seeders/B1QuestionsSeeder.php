<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class B1QuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // Grammar & Tenses (1-4)
            [
                'question' => 'By the time we arrived, the movie ___.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'already started', 'correct' => false],
                    ['text' => 'had already started', 'correct' => true],
                    ['text' => 'has already started', 'correct' => false],
                    ['text' => 'starts', 'correct' => false],
                ],
            ],
            [
                'question' => 'If I ___ you, I would apologize.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'am', 'correct' => false],
                    ['text' => 'was', 'correct' => false],
                    ['text' => 'were', 'correct' => true],
                    ['text' => 'be', 'correct' => false],
                ],
            ],
            [
                'question' => 'She ___ in Paris for three years before moving to Rome.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'lived', 'correct' => false],
                    ['text' => 'has lived', 'correct' => false],
                    ['text' => 'had lived', 'correct' => true],
                    ['text' => 'was living', 'correct' => false],
                ],
            ],
            [
                'question' => 'This time tomorrow, we ___ the conference.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'will attend', 'correct' => false],
                    ['text' => 'will be attending', 'correct' => true],
                    ['text' => 'attend', 'correct' => false],
                    ['text' => 'are attending', 'correct' => false],
                ],
            ],

            // Modals (5-6)
            [
                'question' => 'You ___ have told me earlier! Now it’s too late.',
                'skill' => 'Modals',
                'answers' => [
                    ['text' => 'might', 'correct' => false],
                    ['text' => 'should', 'correct' => true],
                    ['text' => 'could', 'correct' => false],
                    ['text' => 'must', 'correct' => false],
                ],
            ],
            [
                'question' => 'They ___ be at the café—I saw their car outside.',
                'skill' => 'Modals',
                'answers' => [
                    ['text' => 'must', 'correct' => true],
                    ['text' => 'can’t', 'correct' => false],
                    ['text' => 'might', 'correct' => false],
                    ['text' => 'shouldn’t', 'correct' => false],
                ],
            ],

            // Prepositions (7-8)
            [
                'question' => 'He’s allergic ___ cats.',
                'skill' => 'Prepositions',
                'answers' => [
                    ['text' => 'for', 'correct' => false],
                    ['text' => 'to', 'correct' => true],
                    ['text' => 'with', 'correct' => false],
                    ['text' => 'at', 'correct' => false],
                ],
            ],
            [
                'question' => 'We’re looking forward ___ the concert.',
                'skill' => 'Prepositions',
                'answers' => [
                    ['text' => 'to', 'correct' => true],
                    ['text' => 'at', 'correct' => false],
                    ['text' => 'for', 'correct' => false],
                    ['text' => 'with', 'correct' => false],
                ],
            ],

            // Adjectives & Adverbs (9-10)
            [
                'question' => 'This is ___ movie I’ve ever seen!',
                'skill' => 'Adjectives & Adverbs',
                'answers' => [
                    ['text' => 'the most exciting', 'correct' => true],
                    ['text' => 'the more exciting', 'correct' => false],
                    ['text' => 'most exciting', 'correct' => false],
                    ['text' => 'excitingest', 'correct' => false],
                ],
            ],
            [
                'question' => 'She speaks English ___.',
                'skill' => 'Adjectives & Adverbs',
                'answers' => [
                    ['text' => 'fluent', 'correct' => false],
                    ['text' => 'fluently', 'correct' => true],
                    ['text' => 'fluency', 'correct' => false],
                    ['text' => 'more fluent', 'correct' => false],
                ],
            ],

            // Passive Voice (11-12)
            [
                'question' => 'The new bridge ___ next year.',
                'skill' => 'Passive Voice',
                'answers' => [
                    ['text' => 'will build', 'correct' => false],
                    ['text' => 'will be built', 'correct' => true],
                    ['text' => 'is building', 'correct' => false],
                    ['text' => 'builds', 'correct' => false],
                ],
            ],
            [
                'question' => 'The letter ___ by her yesterday.',
                'skill' => 'Passive Voice',
                'answers' => [
                    ['text' => 'was written', 'correct' => true],
                    ['text' => 'wrote', 'correct' => false],
                    ['text' => 'written', 'correct' => false],
                    ['text' => 'is written', 'correct' => false],
                ],
            ],

            // Phrasal Verbs (13-14)
            [
                'question' => 'We had to ___ the meeting because of the storm.',
                'skill' => 'Phrasal Verbs',
                'answers' => [
                    ['text' => 'put off', 'correct' => true],
                    ['text' => 'put away', 'correct' => false],
                    ['text' => 'put on', 'correct' => false],
                    ['text' => 'put out', 'correct' => false],
                ],
            ],
            [
                'question' => 'Can you ___ the baby while I cook dinner?',
                'skill' => 'Phrasal Verbs',
                'answers' => [
                    ['text' => 'look after', 'correct' => true],
                    ['text' => 'look for', 'correct' => false],
                    ['text' => 'look up', 'correct' => false],
                    ['text' => 'look into', 'correct' => false],
                ],
            ],

            // Conditionals (15-16)
            [
                'question' => 'If it rains, we ___ indoors.',
                'skill' => 'Conditionals',
                'answers' => [
                    ['text' => 'stay', 'correct' => false],
                    ['text' => 'will stay', 'correct' => true],
                    ['text' => 'would stay', 'correct' => false],
                    ['text' => 'stayed', 'correct' => false],
                ],
            ],
            [
                'question' => 'If I ___ more time, I’d learn another language.',
                'skill' => 'Conditionals',
                'answers' => [
                    ['text' => 'have', 'correct' => false],
                    ['text' => 'had', 'correct' => true],
                    ['text' => 'would have', 'correct' => false],
                    ['text' => 'has', 'correct' => false],
                ],
            ],

            // Reported Speech (17-18)
            [
                'question' => 'She said, "I’m tired." → She said ___.',
                'skill' => 'Reported Speech',
                'answers' => [
                    ['text' => 'she is tired', 'correct' => false],
                    ['text' => 'she was tired', 'correct' => true],
                    ['text' => 'she has been tired', 'correct' => false],
                    ['text' => 'she tired', 'correct' => false],
                ],
            ],
            [
                'question' => 'He asked me, "Where do you live?" → He asked me ___.',
                'skill' => 'Reported Speech',
                'answers' => [
                    ['text' => 'where I live', 'correct' => false],
                    ['text' => 'where I lived', 'correct' => true],
                    ['text' => 'where did I live', 'correct' => false],
                    ['text' => 'where do I live', 'correct' => false],
                ],
            ],

            // Vocabulary & Collocations (19-20)
            [
                'question' => 'The company plans to ___ its business to Asia.',
                'skill' => 'Vocabulary & Collocations',
                'answers' => [
                    ['text' => 'expand', 'correct' => true],
                    ['text' => 'expend', 'correct' => false],
                    ['text' => 'extend', 'correct' => false],
                    ['text' => 'expect', 'correct' => false],
                ],
            ],
            [
                'question' => 'Could you ___ me some sugar? I’ll return it tomorrow.',
                'skill' => 'Vocabulary & Collocations',
                'answers' => [
                    ['text' => 'lend', 'correct' => true],
                    ['text' => 'borrow', 'correct' => false],
                    ['text' => 'give', 'correct' => false],
                    ['text' => 'take', 'correct' => false],
                ],
            ],

            // Conjunctions (21-22)
            [
                'question' => '___ it was raining, we went for a walk.',
                'skill' => 'Conjunctions',
                'answers' => [
                    ['text' => 'Although', 'correct' => true],
                    ['text' => 'However', 'correct' => false],
                    ['text' => 'Because', 'correct' => false],
                    ['text' => 'So', 'correct' => false],
                ],
            ],
            [
                'question' => 'I’ll call you ___ I arrive.',
                'skill' => 'Conjunctions',
                'answers' => [
                    ['text' => 'until', 'correct' => false],
                    ['text' => 'while', 'correct' => false],
                    ['text' => 'as soon as', 'correct' => true],
                    ['text' => 'during', 'correct' => false],
                ],
            ],

            // Articles & Quantifiers (23-24)
            [
                'question' => '___ Nile is the longest river in Africa.',
                'skill' => 'Articles & Quantifiers',
                'answers' => [
                    ['text' => 'A', 'correct' => false],
                    ['text' => 'An', 'correct' => false],
                    ['text' => 'The', 'correct' => true],
                    ['text' => '-', 'correct' => false],
                ],
            ],
            [
                'question' => 'There are ___ students in the library today.',
                'skill' => 'Articles & Quantifiers',
                'answers' => [
                    ['text' => 'much', 'correct' => false],
                    ['text' => 'a little', 'correct' => false],
                    ['text' => 'few', 'correct' => false],
                    ['text' => 'a few', 'correct' => true],
                ],
            ],

            // Error Correction (25-26)
            [
                'question' => 'Which word is incorrect? She didn’t went to work yesterday.',
                'skill' => 'Error Correction',
                'answers' => [
                    ['text' => 'didn’t', 'correct' => false],
                    ['text' => 'went', 'correct' => true],
                    ['text' => 'to', 'correct' => false],
                    ['text' => 'work', 'correct' => false],
                ],
            ],
            [
                'question' => 'Which word is incorrect? I’m used to wake up early.',
                'skill' => 'Error Correction',
                'answers' => [
                    ['text' => 'I’m', 'correct' => false],
                    ['text' => 'used', 'correct' => false],
                    ['text' => 'wake', 'correct' => true],
                    ['text' => 'early', 'correct' => false],
                ],
            ],

            // Critical Thinking & Language (27-30)
            [
                'question' => 'The opposite of "raise" is ___.',
                'skill' => 'Contextual Fluency',
                'answers' => [
                    ['text' => 'lower', 'correct' => true],
                    ['text' => 'rise', 'correct' => false],
                    ['text' => 'fall', 'correct' => false],
                    ['text' => 'drop', 'correct' => false],
                ],
            ],
            [
                'question' => 'You should ___ a break after studying for hours.',
                'skill' => 'Contextual Fluency',
                'answers' => [
                    ['text' => 'make', 'correct' => false],
                    ['text' => 'take', 'correct' => true],
                    ['text' => 'do', 'correct' => false],
                    ['text' => 'have', 'correct' => false],
                ],
            ],
            [
                'question' => 'The train ___ Platform 5 leaves at 6 PM.',
                'skill' => 'Contextual Fluency',
                'answers' => [
                    ['text' => 'from', 'correct' => true],
                    ['text' => 'at', 'correct' => false],
                    ['text' => 'in', 'correct' => false],
                    ['text' => 'on', 'correct' => false],
                ],
            ],
            [
                'question' => 'I ___ my keys. Can you help me find them?',
                'skill' => 'Contextual Fluency',
                'answers' => [
                    ['text' => 'have lost', 'correct' => true],
                    ['text' => 'am losing', 'correct' => false],
                    ['text' => 'lose', 'correct' => false],
                    ['text' => 'lost', 'correct' => false],
                ],
            ],
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'Question' => $questionData['question'],
                'Level' => 'B1',
                'language' => 'English',
                'Skill' => $questionData['skill'],
            ]);

            foreach ($questionData['answers'] as $answerData) {
                Answer::create([
                    'question_id' => $question->id,
                    'answer' => $answerData['text'],
                    'correct' => $answerData['correct'],
                ]);
            }
        }
    }
}