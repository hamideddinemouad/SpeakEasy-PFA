<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class A1QuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // Grammar: Verb "To Be" (1-3)
            [
                'question' => 'She ___ my sister.',
                'skill' => 'Grammar: Verb "To Be"',
                'answers' => [
                    ['text' => 'am', 'correct' => false],
                    ['text' => 'is', 'correct' => true],
                    ['text' => 'are', 'correct' => false],
                    ['text' => 'be', 'correct' => false],
                ],
            ],
            [
                'question' => 'We ___ from Italy.',
                'skill' => 'Grammar: Verb "To Be"',
                'answers' => [
                    ['text' => 'am', 'correct' => false],
                    ['text' => 'is', 'correct' => false],
                    ['text' => 'are', 'correct' => true],
                    ['text' => 'be', 'correct' => false],
                ],
            ],
            [
                'question' => 'I ___ a student.',
                'skill' => 'Grammar: Verb "To Be"',
                'answers' => [
                    ['text' => 'am', 'correct' => true],
                    ['text' => 'is', 'correct' => false],
                    ['text' => 'are', 'correct' => false],
                    ['text' => 'be', 'correct' => false],
                ],
            ],

            // Basic Verbs (Present Simple) (4-6)
            [
                'question' => 'They ___ football every Sunday.',
                'skill' => 'Basic Verbs (Present Simple)',
                'answers' => [
                    ['text' => 'play', 'correct' => true],
                    ['text' => 'plays', 'correct' => false],
                    ['text' => 'playing', 'correct' => false],
                    ['text' => 'played', 'correct' => false],
                ],
            ],
            [
                'question' => 'He ___ breakfast at 7 AM.',
                'skill' => 'Basic Verbs (Present Simple)',
                'answers' => [
                    ['text' => 'eat', 'correct' => false],
                    ['text' => 'eats', 'correct' => true],
                    ['text' => 'eating', 'correct' => false],
                    ['text' => 'ate', 'correct' => false],
                ],
            ],
            [
                'question' => 'I ___ to the park every day.',
                'skill' => 'Basic Verbs (Present Simple)',
                'answers' => [
                    ['text' => 'go', 'correct' => true],
                    ['text' => 'goes', 'correct' => false],
                    ['text' => 'going', 'correct' => false],
                    ['text' => 'went', 'correct' => false],
                ],
            ],

            // Articles (A/An/The) (7-8)
            [
                'question' => 'This is ___ apple.',
                'skill' => 'Articles (A/An/The)',
                'answers' => [
                    ['text' => 'a', 'correct' => false],
                    ['text' => 'an', 'correct' => true],
                    ['text' => 'the', 'correct' => false],
                    ['text' => '-', 'correct' => false],
                ],
            ],
            [
                'question' => 'I need ___ umbrella.',
                'skill' => 'Articles (A/An/The)',
                'answers' => [
                    ['text' => 'a', 'correct' => false],
                    ['text' => 'an', 'correct' => true],
                    ['text' => 'the', 'correct' => false],
                    ['text' => '-', 'correct' => false],
                ],
            ],

            // Possessive Adjectives (9-10)
            [
                'question' => 'This is ___ book.',
                'skill' => 'Possessive Adjectives',
                'answers' => [
                    ['text' => 'me', 'correct' => false],
                    ['text' => 'my', 'correct' => true],
                    ['text' => 'I', 'correct' => false],
                    ['text' => 'mine', 'correct' => false],
                ],
            ],
            [
                'question' => 'They love ___ dog.',
                'skill' => 'Possessive Adjectives',
                'answers' => [
                    ['text' => 'they', 'correct' => false],
                    ['text' => 'their', 'correct' => true],
                    ['text' => 'them', 'correct' => false],
                    ['text' => 'theirs', 'correct' => false],
                ],
            ],

            // Basic Vocabulary (11-14)
            [
                'question' => 'What color is grass?',
                'skill' => 'Basic Vocabulary',
                'answers' => [
                    ['text' => 'blue', 'correct' => false],
                    ['text' => 'green', 'correct' => true],
                    ['text' => 'red', 'correct' => false],
                    ['text' => 'yellow', 'correct' => false],
                ],
            ],
            [
                'question' => 'A place to buy food: ___',
                'skill' => 'Basic Vocabulary',
                'answers' => [
                    ['text' => 'school', 'correct' => false],
                    ['text' => 'supermarket', 'correct' => true],
                    ['text' => 'hospital', 'correct' => false],
                    ['text' => 'park', 'correct' => false],
                ],
            ],
            [
                'question' => 'The opposite of "big": ___',
                'skill' => 'Basic Vocabulary',
                'answers' => [
                    ['text' => 'small', 'correct' => true],
                    ['text' => 'tall', 'correct' => false],
                    ['text' => 'fast', 'correct' => false],
                    ['text' => 'hot', 'correct' => false],
                ],
            ],
            [
                'question' => 'You read a ___.',
                'skill' => 'Basic Vocabulary',
                'answers' => [
                    ['text' => 'book', 'correct' => true],
                    ['text' => 'chair', 'correct' => false],
                    ['text' => 'apple', 'correct' => false],
                    ['text' => 'car', 'correct' => false],
                ],
            ],

            // Numbers (15-16)
            [
                'question' => '"10 + 5" is ___.',
                'skill' => 'Numbers',
                'answers' => [
                    ['text' => 'twelve', 'correct' => false],
                    ['text' => 'fifteen', 'correct' => true],
                    ['text' => 'twenty', 'correct' => false],
                    ['text' => 'five', 'correct' => false],
                ],
            ],
            [
                'question' => 'How many days are in a week?',
                'skill' => 'Numbers',
                'answers' => [
                    ['text' => 'five', 'correct' => false],
                    ['text' => 'six', 'correct' => false],
                    ['text' => 'seven', 'correct' => true],
                    ['text' => 'eight', 'correct' => false],
                ],
            ],

            // Prepositions (17-18)
            [
                'question' => 'The cat is ___ the table.',
                'skill' => 'Prepositions',
                'answers' => [
                    ['text' => 'in', 'correct' => false],
                    ['text' => 'on', 'correct' => true],
                    ['text' => 'at', 'correct' => false],
                    ['text' => 'under', 'correct' => false],
                ],
            ],
            [
                'question' => 'I go to bed ___ night.',
                'skill' => 'Prepositions',
                'answers' => [
                    ['text' => 'in', 'correct' => false],
                    ['text' => 'on', 'correct' => false],
                    ['text' => 'at', 'correct' => true],
                    ['text' => 'by', 'correct' => false],
                ],
            ],

            // Questions (19-20)
            [
                'question' => '___ is your name?',
                'skill' => 'Questions',
                'answers' => [
                    ['text' => 'What', 'correct' => true],
                    ['text' => 'Where', 'correct' => false],
                    ['text' => 'How', 'correct' => false],
                    ['text' => 'When', 'correct' => false],
                ],
            ],
            [
                'question' => '___ old are you?',
                'skill' => 'Questions',
                'answers' => [
                    ['text' => 'What', 'correct' => false],
                    ['text' => 'Where', 'correct' => false],
                    ['text' => 'How', 'correct' => true],
                    ['text' => 'When', 'correct' => false],
                ],
            ],

            // Family & People (21-22)
            [
                'question' => 'Your mother’s sister is your ___.',
                'skill' => 'Family & People',
                'answers' => [
                    ['text' => 'aunt', 'correct' => true],
                    ['text' => 'uncle', 'correct' => false],
                    ['text' => 'cousin', 'correct' => false],
                    ['text' => 'grandmother', 'correct' => false],
                ],
            ],
            [
                'question' => 'A baby cat is called a ___.',
                'skill' => 'Family & People',
                'answers' => [
                    ['text' => 'puppy', 'correct' => false],
                    ['text' => 'kitten', 'correct' => true],
                    ['text' => 'calf', 'correct' => false],
                    ['text' => 'cub', 'correct' => false],
                ],
            ],

            // Daily Routines (23-24)
            [
                'question' => 'I ___ my teeth every morning.',
                'skill' => 'Daily Routines',
                'answers' => [
                    ['text' => 'wash', 'correct' => false],
                    ['text' => 'brush', 'correct' => true],
                    ['text' => 'eat', 'correct' => false],
                    ['text' => 'drink', 'correct' => false],
                ],
            ],
            [
                'question' => 'You ___ coffee in a cup.',
                'skill' => 'Daily Routines',
                'answers' => [
                    ['text' => 'eat', 'correct' => false],
                    ['text' => 'drink', 'correct' => true],
                    ['text' => 'cook', 'correct' => false],
                    ['text' => 'read', 'correct' => false],
                ],
            ],

            // Time & Days (25-26)
            [
                'question' => 'The day after Monday is ___.',
                'skill' => 'Time & Days',
                'answers' => [
                    ['text' => 'Tuesday', 'correct' => true],
                    ['text' => 'Wednesday', 'correct' => false],
                    ['text' => 'Sunday', 'correct' => false],
                    ['text' => 'Friday', 'correct' => false],
                ],
            ],
            [
                'question' => '"Morning," "afternoon," and "evening" are parts of the ___.',
                'skill' => 'Time & Days',
                'answers' => [
                    ['text' => 'week', 'correct' => false],
                    ['text' => 'day', 'correct' => true],
                    ['text' => 'month', 'correct' => false],
                    ['text' => 'year', 'correct' => false],
                ],
            ],

            // Basic Language Toolkit (27-30)
            [
                'question' => 'You write with a ___.',
                'skill' => 'Basic Language Toolkit',
                'answers' => [
                    ['text' => 'pencil', 'correct' => true],
                    ['text' => 'chair', 'correct' => false],
                    ['text' => 'window', 'correct' => false],
                    ['text' => 'door', 'correct' => false],
                ],
            ],
            [
                'question' => 'The season with snow is ___.',
                'skill' => 'Basic Language Toolkit',
                'answers' => [
                    ['text' => 'summer', 'correct' => false],
                    ['text' => 'winter', 'correct' => true],
                    ['text' => 'spring', 'correct' => false],
                    ['text' => 'autumn', 'correct' => false],
                ],
            ],
            [
                'question' => '"Hello" and "Goodbye" are ___.',
                'skill' => 'Basic Language Toolkit',
                'answers' => [
                    ['text' => 'numbers', 'correct' => false],
                    ['text' => 'colors', 'correct' => false],
                    ['text' => 'greetings', 'correct' => true],
                    ['text' => 'animals', 'correct' => false],
                ],
            ],
            [
                'question' => 'You sit on a ___.',
                'skill' => 'Basic Language Toolkit',
                'answers' => [
                    ['text' => 'table', 'correct' => false],
                    ['text' => 'bed', 'correct' => false],
                    ['text' => 'chair', 'correct' => true],
                    ['text' => 'lamp', 'correct' => false],
                ],
            ],
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'Question' => $questionData['question'],
                'Level' => 'A1',
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