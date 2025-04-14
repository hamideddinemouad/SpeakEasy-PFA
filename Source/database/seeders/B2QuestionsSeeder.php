<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class B2QuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // Advanced Grammar & Tenses (1-4)
            [
                'question' => 'By next year, she ___ her degree.',
                'skill' => 'Advanced Grammar & Tenses',
                'answers' => [
                    ['text' => 'will complete', 'correct' => false],
                    ['text' => 'will have completed', 'correct' => true],
                    ['text' => 'completes', 'correct' => false],
                    ['text' => 'has completed', 'correct' => false],
                ],
            ],
            [
                'question' => 'If I ___ you, I wouldn’t take that risk.',
                'skill' => 'Advanced Grammar & Tenses',
                'answers' => [
                    ['text' => 'am', 'correct' => false],
                    ['text' => 'were', 'correct' => true],
                    ['text' => 'had been', 'correct' => false],
                    ['text' => 'would be', 'correct' => false],
                ],
            ],
            [
                'question' => 'Hardly ___ the door when the phone rang.',
                'skill' => 'Advanced Grammar & Tenses',
                'answers' => [
                    ['text' => 'had I closed', 'correct' => true],
                    ['text' => 'I closed', 'correct' => false],
                    ['text' => 'I had closed', 'correct' => false],
                    ['text' => 'closed I', 'correct' => false],
                ],
            ],
            [
                'question' => 'The project ___ by the team before the deadline.',
                'skill' => 'Advanced Grammar & Tenses',
                'answers' => [
                    ['text' => 'was finished', 'correct' => false],
                    ['text' => 'has been finished', 'correct' => false],
                    ['text' => 'had been finished', 'correct' => true],
                    ['text' => 'finished', 'correct' => false],
                ],
            ],

            // Modals & Speculation (5-6)
            [
                'question' => 'You ___ have seen the email—it’s marked as “read.”',
                'skill' => 'Modals & Speculation',
                'answers' => [
                    ['text' => 'must', 'correct' => true],
                    ['text' => 'might', 'correct' => false],
                    ['text' => 'could', 'correct' => false],
                    ['text' => 'should', 'correct' => false],
                ],
            ],
            [
                'question' => 'She ___ have forgotten the meeting; she’s usually punctual.',
                'skill' => 'Modals & Speculation',
                'answers' => [
                    ['text' => 'can’t', 'correct' => true],
                    ['text' => 'mustn’t', 'correct' => false],
                    ['text' => 'shouldn’t', 'correct' => false],
                    ['text' => 'needn’t', 'correct' => false],
                ],
            ],

            // Phrasal Verbs (7-8)
            [
                'question' => 'The meeting was ___ due to technical issues.',
                'skill' => 'Phrasal Verbs',
                'answers' => [
                    ['text' => 'called off', 'correct' => true],
                    ['text' => 'called out', 'correct' => false],
                    ['text' => 'called up', 'correct' => false],
                    ['text' => 'called in', 'correct' => false],
                ],
            ],
            [
                'question' => 'Can you ___ the documents before signing?',
                'skill' => 'Phrasal Verbs',
                'answers' => [
                    ['text' => 'look into', 'correct' => false],
                    ['text' => 'look over', 'correct' => true],
                    ['text' => 'look up', 'correct' => false],
                    ['text' => 'look after', 'correct' => false],
                ],
            ],

            // Conditionals & Mixed Tenses (9-10)
            [
                'question' => 'If he ___ harder, he would have passed the exam.',
                'skill' => 'Conditionals & Mixed Tenses',
                'answers' => [
                    ['text' => 'studied', 'correct' => false],
                    ['text' => 'had studied', 'correct' => true],
                    ['text' => 'studies', 'correct' => false],
                    ['text' => 'has studied', 'correct' => false],
                ],
            ],
            [
                'question' => 'If I were rich, I ___ around the world.',
                'skill' => 'Conditionals & Mixed Tenses',
                'answers' => [
                    ['text' => 'travel', 'correct' => false],
                    ['text' => 'will travel', 'correct' => false],
                    ['text' => 'would travel', 'correct' => true],
                    ['text' => 'would have traveled', 'correct' => false],
                ],
            ],

            // Vocabulary & Collocations (11-12)
            [
                'question' => 'The scandal ___ widespread outrage.',
                'skill' => 'Vocabulary & Collocations',
                'answers' => [
                    ['text' => 'provoked', 'correct' => true],
                    ['text' => 'evoked', 'correct' => false],
                    ['text' => 'revoked', 'correct' => false],
                    ['text' => 'invoked', 'correct' => false],
                ],
            ],
            [
                'question' => 'The company ___ a new sustainability policy.',
                'skill' => 'Vocabulary & Collocations',
                'answers' => [
                    ['text' => 'implemented', 'correct' => true],
                    ['text' => 'complimented', 'correct' => false],
                    ['text' => 'supplemented', 'correct' => false],
                    ['text' => 'fermented', 'correct' => false],
                ],
            ],

            // Passive Voice (13-14)
            [
                'question' => 'The proposal ___ by the board next week.',
                'skill' => 'Passive Voice',
                'answers' => [
                    ['text' => 'will discuss', 'correct' => false],
                    ['text' => 'will be discussed', 'correct' => true],
                    ['text' => 'is discussing', 'correct' => false],
                    ['text' => 'discusses', 'correct' => false],
                ],
            ],
            [
                'question' => 'The manuscript ___ into three languages so far.',
                'skill' => 'Passive Voice',
                'answers' => [
                    ['text' => 'translated', 'correct' => false],
                    ['text' => 'has translated', 'correct' => false],
                    ['text' => 'has been translated', 'correct' => true],
                    ['text' => 'is translating', 'correct' => false],
                ],
            ],

            // Reported Speech (15-16)
            [
                'question' => 'He said, "I’ll finish the report by Friday." → He said ___.',
                'skill' => 'Reported Speech',
                'answers' => [
                    ['text' => 'he’ll finish the report by Friday', 'correct' => false],
                    ['text' => 'he would finish the report by Friday', 'correct' => true],
                    ['text' => 'he finishes the report by Friday', 'correct' => false],
                    ['text' => 'he finished the report by Friday', 'correct' => false],
                ],
            ],
            [
                'question' => 'She asked, "Why didn’t you call me?" → She asked ___.',
                'skill' => 'Reported Speech',
                'answers' => [
                    ['text' => 'why I hadn’t called her', 'correct' => true],
                    ['text' => 'why didn’t I call her', 'correct' => false],
                    ['text' => 'why I didn’t call her', 'correct' => false],
                    ['text' => 'why hadn’t I called her', 'correct' => false],
                ],
            ],

            // Inversion & Emphasis (17-18)
            [
                'question' => 'Not only ___ late, but he also spilled coffee.',
                'skill' => 'Inversion & Emphasis',
                'answers' => [
                    ['text' => 'he was', 'correct' => false],
                    ['text' => 'was he', 'correct' => true],
                    ['text' => 'he is', 'correct' => false],
                    ['text' => 'is he', 'correct' => false],
                ],
            ],
            [
                'question' => 'Rarely ___ such a talented artist.',
                'skill' => 'Inversion & Emphasis',
                'answers' => [
                    ['text' => 'have I seen', 'correct' => true],
                    ['text' => 'I have seen', 'correct' => false],
                    ['text' => 'I saw', 'correct' => false],
                    ['text' => 'saw I', 'correct' => false],
                ],
            ],

            // Linking Words & Discourse (19-20)
            [
                'question' => '___ the heavy traffic, we arrived on time.',
                'skill' => 'Linking Words & Discourse',
                'answers' => [
                    ['text' => 'Despite', 'correct' => true],
                    ['text' => 'Although', 'correct' => false],
                    ['text' => 'However', 'correct' => false],
                    ['text' => 'Whereas', 'correct' => false],
                ],
            ],
            [
                'question' => 'The plan is risky; ___, the rewards are high.',
                'skill' => 'Linking Words & Discourse',
                'answers' => [
                    ['text' => 'nevertheless', 'correct' => true],
                    ['text' => 'despite', 'correct' => false],
                    ['text' => 'due to', 'correct' => false],
                    ['text' => 'in spite', 'correct' => false],
                ],
            ],

            // Error Correction (21-22)
            [
                'question' => 'Identify the error: She suggested me to apply for the scholarship.',
                'skill' => 'Error Correction',
                'answers' => [
                    ['text' => 'suggested', 'correct' => false],
                    ['text' => 'me', 'correct' => true],
                    ['text' => 'to apply', 'correct' => false],
                    ['text' => 'for', 'correct' => false],
                ],
            ],
            [
                'question' => 'Identify the error: Despite of the delay, the event was successful.',
                'skill' => 'Error Correction',
                'answers' => [
                    ['text' => 'Despite', 'correct' => false],
                    ['text' => 'of', 'correct' => true],
                    ['text' => 'delay', 'correct' => false],
                    ['text' => 'successful', 'correct' => false],
                ],
            ],

            // Idioms & Expressions (23-24)
            [
                'question' => 'He always ___ his promises.',
                'skill' => 'Idioms & Expressions',
                'answers' => [
                    ['text' => 'keeps up with', 'correct' => false],
                    ['text' => 'stands by', 'correct' => false],
                    ['text' => 'runs out of', 'correct' => false],
                    ['text' => 'goes back on', 'correct' => true],
                ],
            ],
            [
                'question' => 'Let’s ___ and discuss this later.',
                'skill' => 'Idioms & Expressions',
                'answers' => [
                    ['text' => 'call it a day', 'correct' => true],
                    ['text' => 'hit the road', 'correct' => false],
                    ['text' => 'break the ice', 'correct' => false],
                    ['text' => 'keep an eye', 'correct' => false],
                ],
            ],

            // Prepositions & Articles (25-26)
            [
                'question' => 'She’s allergic ___ shellfish.',
                'skill' => 'Prepositions & Articles',
                'answers' => [
                    ['text' => 'to', 'correct' => true],
                    ['text' => 'with', 'correct' => false],
                    ['text' => 'for', 'correct' => false],
                    ['text' => 'at', 'correct' => false],
                ],
            ],
            [
                'question' => 'He was accused ___ fraud.',
                'skill' => 'Prepositions & Articles',
                'answers' => [
                    ['text' => 'for', 'correct' => false],
                    ['text' => 'with', 'correct' => false],
                    ['text' => 'of', 'correct' => true],
                    ['text' => 'by', 'correct' => false],
                ],
            ],

            // Advanced Vocabulary (27-28)
            [
                'question' => 'The CEO’s speech was ___ and inspiring.',
                'skill' => 'Advanced Vocabulary',
                'answers' => [
                    ['text' => 'mundane', 'correct' => false],
                    ['text' => 'eloquent', 'correct' => true],
                    ['text' => 'vague', 'correct' => false],
                    ['text' => 'tedious', 'correct' => false],
                ],
            ],
            [
                'question' => 'The data was ___ to prove the hypothesis.',
                'skill' => 'Advanced Vocabulary',
                'answers' => [
                    ['text' => 'insufficient', 'correct' => true],
                    ['text' => 'inefficient', 'correct' => false],
                    ['text' => 'insistent', 'correct' => false],
                    ['text' => 'indifferent', 'correct' => false],
                ],
            ],

            // Critical Thinking & Language (29-30)
            [
                'question' => 'The ___ of the novel is set in medieval France.',
                'skill' => 'Critical Thinking & Language',
                'answers' => [
                    ['text' => 'plot', 'correct' => false],
                    ['text' => 'climax', 'correct' => false],
                    ['text' => 'setting', 'correct' => true],
                    ['text' => 'theme', 'correct' => false],
                ],
            ],
            [
                'question' => 'The lawyer ___ the contract carefully.',
                'skill' => 'Critical Thinking & Language',
                'answers' => [
                    ['text' => 'scrutinized', 'correct' => true],
                    ['text' => 'simplified', 'correct' => false],
                    ['text' => 'summarized', 'correct' => false],
                    ['text' => 'synthesized', 'correct' => false],
                ],
            ],
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'Question' => $questionData['question'],
                'Level' => 'B2',
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