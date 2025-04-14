<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class A2QuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // Grammar & Tenses (1-6)
            [
                'question' => 'She usually ___ TV in the evening.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'watches', 'correct' => true],
                    ['text' => 'is watching', 'correct' => false],
                    ['text' => 'watch', 'correct' => false],
                    ['text' => 'watched', 'correct' => false],
                ],
            ],
            [
                'question' => 'Right now, they ___ dinner.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'cook', 'correct' => false],
                    ['text' => 'cooks', 'correct' => false],
                    ['text' => 'are cooking', 'correct' => true],
                    ['text' => 'cooked', 'correct' => false],
                ],
            ],
            [
                'question' => 'Yesterday, I ___ to the park.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'go', 'correct' => false],
                    ['text' => 'goes', 'correct' => false],
                    ['text' => 'went', 'correct' => true],
                    ['text' => 'going', 'correct' => false],
                ],
            ],
            [
                'question' => 'She ___ her homework last night.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'do', 'correct' => false],
                    ['text' => 'did', 'correct' => true],
                    ['text' => 'does', 'correct' => false],
                    ['text' => 'done', 'correct' => false],
                ],
            ],
            [
                'question' => 'We ___ a movie tonight.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'see', 'correct' => false],
                    ['text' => 'are going to see', 'correct' => true],
                    ['text' => 'will see', 'correct' => false],
                    ['text' => 'saw', 'correct' => false],
                ],
            ],
            [
                'question' => 'I think it ___ tomorrow.',
                'skill' => 'Grammar & Tenses',
                'answers' => [
                    ['text' => 'rains', 'correct' => false],
                    ['text' => 'raining', 'correct' => false],
                    ['text' => 'rain', 'correct' => false],
                    ['text' => 'will rain', 'correct' => true],
                ],
            ],

            // Modals (7-8)
            [
                'question' => '___ you swim when you were 5?',
                'skill' => 'Modals',
                'answers' => [
                    ['text' => 'Can', 'correct' => false],
                    ['text' => 'Could', 'correct' => true],
                    ['text' => 'Should', 'correct' => false],
                    ['text' => 'Must', 'correct' => false],
                ],
            ],
            [
                'question' => 'You ___ eat more vegetables.',
                'skill' => 'Modals',
                'answers' => [
                    ['text' => 'should', 'correct' => true],
                    ['text' => 'can', 'correct' => false],
                    ['text' => 'must', 'correct' => false],
                    ['text' => 'will', 'correct' => false],
                ],
            ],

            // Prepositions (9-10)
            [
                'question' => 'My birthday is ___ July.',
                'skill' => 'Prepositions',
                'answers' => [
                    ['text' => 'in', 'correct' => true],
                    ['text' => 'on', 'correct' => false],
                    ['text' => 'at', 'correct' => false],
                    ['text' => 'by', 'correct' => false],
                ],
            ],
            [
                'question' => 'The book is ___ the table.',
                'skill' => 'Prepositions',
                'answers' => [
                    ['text' => 'in', 'correct' => false],
                    ['text' => 'on', 'correct' => true],
                    ['text' => 'at', 'correct' => false],
                    ['text' => 'under', 'correct' => false],
                ],
            ],

            // Adjectives & Adverbs (11-12)
            [
                'question' => 'She sings ___.',
                'skill' => 'Adjectives & Adverbs',
                'answers' => [
                    ['text' => 'beautiful', 'correct' => false],
                    ['text' => 'beautifully', 'correct' => true],
                    ['text' => 'beauty', 'correct' => false],
                    ['text' => 'beautify', 'correct' => false],
                ],
            ],
            [
                'question' => 'He is very ___.',
                'skill' => 'Adjectives & Adverbs',
                'answers' => [
                    ['text' => 'friend', 'correct' => false],
                    ['text' => 'friendly', 'correct' => true],
                    ['text' => 'friends', 'correct' => false],
                    ['text' => 'friendship', 'correct' => false],
                ],
            ],

            // Comparatives & Superlatives (13-14)
            [
                'question' => 'This car is ___ than that one.',
                'skill' => 'Comparatives & Superlatives',
                'answers' => [
                    ['text' => 'fast', 'correct' => false],
                    ['text' => 'faster', 'correct' => true],
                    ['text' => 'fastest', 'correct' => false],
                    ['text' => 'more fast', 'correct' => false],
                ],
            ],
            [
                'question' => 'Mount Everest is the ___ mountain.',
                'skill' => 'Comparatives & Superlatives',
                'answers' => [
                    ['text' => 'high', 'correct' => false],
                    ['text' => 'higher', 'correct' => false],
                    ['text' => 'highest', 'correct' => true],
                    ['text' => 'most high', 'correct' => false],
                ],
            ],

            // Nouns & Articles (15-16)
            [
                'question' => 'I need ___ apple.',
                'skill' => 'Nouns & Articles',
                'answers' => [
                    ['text' => 'a', 'correct' => false],
                    ['text' => 'an', 'correct' => true],
                    ['text' => 'some', 'correct' => false],
                    ['text' => 'any', 'correct' => false],
                ],
            ],
            [
                'question' => 'Can I have ___ water?',
                'skill' => 'Nouns & Articles',
                'answers' => [
                    ['text' => 'a', 'correct' => false],
                    ['text' => 'an', 'correct' => false],
                    ['text' => 'some', 'correct' => true],
                    ['text' => 'any', 'correct' => false],
                ],
            ],

            // Pronouns (17-18)
            [
                'question' => 'This is ___ book.',
                'skill' => 'Pronouns',
                'answers' => [
                    ['text' => 'me', 'correct' => false],
                    ['text' => 'my', 'correct' => true],
                    ['text' => 'I', 'correct' => false],
                    ['text' => 'mine', 'correct' => false],
                ],
            ],
            [
                'question' => 'The keys are ___.',
                'skill' => 'Pronouns',
                'answers' => [
                    ['text' => 'their', 'correct' => false],
                    ['text' => 'theirs', 'correct' => true],
                    ['text' => 'they', 'correct' => false],
                    ['text' => 'them', 'correct' => false],
                ],
            ],

            // Phrasal Verbs & Vocabulary (19-22)
            [
                'question' => 'It’s dark here. Please ___ the light.',
                'skill' => 'Phrasal Verbs & Vocabulary',
                'answers' => [
                    ['text' => 'turn on', 'correct' => true],
                    ['text' => 'turn in', 'correct' => false],
                    ['text' => 'turn off', 'correct' => false],
                    ['text' => 'turn up', 'correct' => false],
                ],
            ],
            [
                'question' => 'She ___ a letter to her friend yesterday.',
                'skill' => 'Phrasal Verbs & Vocabulary',
                'answers' => [
                    ['text' => 'write', 'correct' => false],
                    ['text' => 'writes', 'correct' => false],
                    ['text' => 'wrote', 'correct' => true],
                    ['text' => 'written', 'correct' => false],
                ],
            ],
            [
                'question' => 'Let’s go to the ___ to buy bread.',
                'skill' => 'Phrasal Verbs & Vocabulary',
                'answers' => [
                    ['text' => 'bank', 'correct' => false],
                    ['text' => 'library', 'correct' => false],
                    ['text' => 'bakery', 'correct' => true],
                    ['text' => 'school', 'correct' => false],
                ],
            ],
            [
                'question' => 'Can you ___ me the salt, please?',
                'skill' => 'Phrasal Verbs & Vocabulary',
                'answers' => [
                    ['text' => 'pass', 'correct' => true],
                    ['text' => 'past', 'correct' => false],
                    ['text' => 'passed', 'correct' => false],
                    ['text' => 'passing', 'correct' => false],
                ],
            ],

            // Questions & Conjunctions (23-24)
            [
                'question' => '___ you like coffee?',
                'skill' => 'Questions & Conjunctions',
                'answers' => [
                    ['text' => 'Do', 'correct' => true],
                    ['text' => 'Does', 'correct' => false],
                    ['text' => 'Are', 'correct' => false],
                    ['text' => 'Is', 'correct' => false],
                ],
            ],
            [
                'question' => 'I wanted to go, ___ I was too tired.',
                'skill' => 'Questions & Conjunctions',
                'answers' => [
                    ['text' => 'and', 'correct' => false],
                    ['text' => 'but', 'correct' => true],
                    ['text' => 'because', 'correct' => false],
                    ['text' => 'so', 'correct' => false],
                ],
            ],

            // Practical Language Use (25-30)
            [
                'question' => '___ many people here.',
                'skill' => 'Practical Language Use',
                'answers' => [
                    ['text' => 'There is', 'correct' => false],
                    ['text' => 'There are', 'correct' => true],
                    ['text' => 'There', 'correct' => false],
                    ['text' => 'Their', 'correct' => false],
                ],
            ],
            [
                'question' => 'She ___ goes to the gym.',
                'skill' => 'Practical Language Use',
                'answers' => [
                    ['text' => 'always', 'correct' => true],
                    ['text' => 'every day', 'correct' => false],
                    ['text' => 'now', 'correct' => false],
                    ['text' => 'yesterday', 'correct' => false],
                ],
            ],
            [
                'question' => 'I saw ___ elephant at the zoo.',
                'skill' => 'Practical Language Use',
                'answers' => [
                    ['text' => 'a', 'correct' => false],
                    ['text' => 'an', 'correct' => true],
                    ['text' => 'the', 'correct' => false],
                    ['text' => '-', 'correct' => false],
                ],
            ],
            [
                'question' => 'She is ___ best student in class.',
                'skill' => 'Practical Language Use',
                'answers' => [
                    ['text' => 'a', 'correct' => false],
                    ['text' => 'an', 'correct' => false],
                    ['text' => 'the', 'correct' => true],
                    ['text' => '-', 'correct' => false],
                ],
            ],
            [
                'question' => 'The meeting starts ___ 9 AM.',
                'skill' => 'Practical Language Use',
                'answers' => [
                    ['text' => 'in', 'correct' => false],
                    ['text' => 'on', 'correct' => false],
                    ['text' => 'at', 'correct' => true],
                    ['text' => 'by', 'correct' => false],
                ],
            ],
            [
                'question' => '___ you later!',
                'skill' => 'Practical Language Use',
                'answers' => [
                    ['text' => 'See', 'correct' => true],
                    ['text' => 'Look', 'correct' => false],
                    ['text' => 'Watch', 'correct' => false],
                    ['text' => 'View', 'correct' => false],
                ],
            ],
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'Question' => $questionData['question'],
                'Level' => 'A2',
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