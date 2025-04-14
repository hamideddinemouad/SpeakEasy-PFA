<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class C1QuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // Advanced Grammar & Tenses (1-4)
            [
                'question' => '___ had the meeting started than the power went out.',
                'skill' => 'Advanced Grammar & Tenses',
                'answers' => [
                    ['text' => 'No sooner', 'correct' => true],
                    ['text' => 'Hardly', 'correct' => false],
                    ['text' => 'Scarcely', 'correct' => false],
                    ['text' => 'Barely', 'correct' => false],
                ],
            ],
            [
                'question' => 'By the time he retires, he ___ for the company for 40 years.',
                'skill' => 'Advanced Grammar & Tenses',
                'answers' => [
                    ['text' => 'will have worked', 'correct' => true],
                    ['text' => 'will work', 'correct' => false],
                    ['text' => 'has worked', 'correct' => false],
                    ['text' => 'is working', 'correct' => false],
                ],
            ],
            [
                'question' => 'Were I in your position, I ___ reconsider the offer.',
                'skill' => 'Advanced Grammar & Tenses',
                'answers' => [
                    ['text' => 'will', 'correct' => false],
                    ['text' => 'would', 'correct' => true],
                    ['text' => 'had', 'correct' => false],
                    ['text' => 'could', 'correct' => false],
                ],
            ],
            [
                'question' => 'The proposal, ___ drafted by the legal team, requires revision.',
                'skill' => 'Advanced Grammar & Tenses',
                'answers' => [
                    ['text' => 'though meticulously', 'correct' => true],
                    ['text' => 'however meticulous', 'correct' => false],
                    ['text' => 'meticulously though', 'correct' => false],
                    ['text' => 'meticulous however', 'correct' => false],
                ],
            ],

            // Modals & Speculation (5-6)
            [
                'question' => 'You ___ have attended the lecture; it was mandatory.',
                'skill' => 'Modals & Speculation',
                'answers' => [
                    ['text' => 'must', 'correct' => false],
                    ['text' => 'ought to', 'correct' => true],
                    ['text' => 'needn’t', 'correct' => false],
                    ['text' => 'couldn’t', 'correct' => false],
                ],
            ],
            [
                'question' => 'She ___ have misunderstood the instructions—her work is flawless.',
                'skill' => 'Modals & Speculation',
                'answers' => [
                    ['text' => 'must', 'correct' => false],
                    ['text' => 'can’t', 'correct' => true],
                    ['text' => 'might', 'correct' => false],
                    ['text' => 'shouldn’t', 'correct' => false],
                ],
            ],

            // Phrasal Verbs & Idioms (7-8)
            [
                'question' => 'After months of delays, the project finally ___ last week.',
                'skill' => 'Phrasal Verbs & Idioms',
                'answers' => [
                    ['text' => 'fell through', 'correct' => false],
                    ['text' => 'took off', 'correct' => false],
                    ['text' => 'came about', 'correct' => false],
                    ['text' => 'got off the ground', 'correct' => true],
                ],
            ],
            [
                'question' => 'He ___ his father’s bad temper.',
                'skill' => 'Phrasal Verbs & Idioms',
                'answers' => [
                    ['text' => 'takes after', 'correct' => true],
                    ['text' => 'takes off', 'correct' => false],
                    ['text' => 'takes up', 'correct' => false],
                    ['text' => 'takes over', 'correct' => false],
                ],
            ],

            // Conditionals & Mixed Tenses (9-10)
            [
                'question' => 'If you ___ to the event, you would have met the CEO.',
                'skill' => 'Conditionals & Mixed Tenses',
                'answers' => [
                    ['text' => 'came', 'correct' => false],
                    ['text' => 'had come', 'correct' => true],
                    ['text' => 'would come', 'correct' => false],
                    ['text' => 'come', 'correct' => false],
                ],
            ],
            [
                'question' => 'Supposing she ___ the truth, how would she react?',
                'skill' => 'Conditionals & Mixed Tenses',
                'answers' => [
                    ['text' => 'knows', 'correct' => false],
                    ['text' => 'knew', 'correct' => true],
                    ['text' => 'had known', 'correct' => false],
                    ['text' => 'would know', 'correct' => false],
                ],
            ],

            // Advanced Vocabulary (11-12)
            [
                'question' => 'The politician’s speech was full of ___ to historical events.',
                'skill' => 'Advanced Vocabulary',
                'answers' => [
                    ['text' => 'allusions', 'correct' => true],
                    ['text' => 'illusions', 'correct' => false],
                    ['text' => 'elusions', 'correct' => false],
                    ['text' => 'delusions', 'correct' => false],
                ],
            ],
            [
                'question' => 'Her ___ remarks during the debate stunned the audience.',
                'skill' => 'Advanced Vocabulary',
                'answers' => [
                    ['text' => 'incisive', 'correct' => true],
                    ['text' => 'invasive', 'correct' => false],
                    ['text' => 'decisive', 'correct' => false],
                    ['text' => 'derisive', 'correct' => false],
                ],
            ],

            // Passive & Causative Structures (13-14)
            [
                'question' => 'The manuscript ___ to have been written in the 15th century.',
                'skill' => 'Passive & Causative Structures',
                'answers' => [
                    ['text' => 'is believed', 'correct' => true],
                    ['text' => 'believes', 'correct' => false],
                    ['text' => 'has believed', 'correct' => false],
                    ['text' => 'was believing', 'correct' => false],
                ],
            ],
            [
                'question' => 'We ___ the contract reviewed by a specialist.',
                'skill' => 'Passive & Causative Structures',
                'answers' => [
                    ['text' => 'made', 'correct' => false],
                    ['text' => 'had', 'correct' => true],
                    ['text' => 'let', 'correct' => false],
                    ['text' => 'got', 'correct' => false],
                ],
            ],

            // Inversion & Emphasis (15-16)
            [
                'question' => '___ did she finish the report, but she also prepared the presentation.',
                'skill' => 'Inversion & Emphasis',
                'answers' => [
                    ['text' => 'Not only', 'correct' => true],
                    ['text' => 'Only', 'correct' => false],
                    ['text' => 'Hardly', 'correct' => false],
                    ['text' => 'Rarely', 'correct' => false],
                ],
            ],
            [
                'question' => 'So ___ was the performance that the audience gave a standing ovation.',
                'skill' => 'Inversion & Emphasis',
                'answers' => [
                    ['text' => 'moving', 'correct' => true],
                    ['text' => 'moved', 'correct' => false],
                    ['text' => 'move', 'correct' => false],
                    ['text' => 'movement', 'correct' => false],
                ],
            ],

            // Collocations & Fixed Expressions (17-18)
            [
                'question' => 'The company’s decision ___ a precedent for future cases.',
                'skill' => 'Collocations & Fixed Expressions',
                'answers' => [
                    ['text' => 'set', 'correct' => true],
                    ['text' => 'made', 'correct' => false],
                    ['text' => 'took', 'correct' => false],
                    ['text' => 'gave', 'correct' => false],
                ],
            ],
            [
                'question' => 'The negotiations ___ to a standstill after hours of debate.',
                'skill' => 'Collocations & Fixed Expressions',
                'answers' => [
                    ['text' => 'came', 'correct' => false],
                    ['text' => 'went', 'correct' => false],
                    ['text' => 'ground', 'correct' => true],
                    ['text' => 'brought', 'correct' => false],
                ],
            ],

            // Prepositions & Articles (19-20)
            [
                'question' => 'His actions were ___ odds with his stated principles.',
                'skill' => 'Prepositions & Articles',
                'answers' => [
                    ['text' => 'in', 'correct' => false],
                    ['text' => 'at', 'correct' => true],
                    ['text' => 'on', 'correct' => false],
                    ['text' => 'by', 'correct' => false],
                ],
            ],
            [
                'question' => 'She has a knack ___ solving complex problems.',
                'skill' => 'Prepositions & Articles',
                'answers' => [
                    ['text' => 'for', 'correct' => true],
                    ['text' => 'with', 'correct' => false],
                    ['text' => 'to', 'correct' => false],
                    ['text' => 'at', 'correct' => false],
                ],
            ],

            // Error Correction (21-22)
            [
                'question' => 'Identify the error: He insisted on that we stay for dinner.',
                'skill' => 'Error Correction',
                'answers' => [
                    ['text' => 'insisted', 'correct' => false],
                    ['text' => 'on', 'correct' => true],
                    ['text' => 'that', 'correct' => false],
                    ['text' => 'stay', 'correct' => false],
                ],
            ],
            [
                'question' => 'Identify the error: The report was lacking of critical data.',
                'skill' => 'Error Correction',
                'answers' => [
                    ['text' => 'was', 'correct' => false],
                    ['text' => 'lacking', 'correct' => false],
                    ['text' => 'of', 'correct' => true],
                    ['text' => 'critical', 'correct' => false],
                ],
            ],

            // Discourse Markers (23-24)
            [
                'question' => '___ the risks involved, the project proceeded as planned.',
                'skill' => 'Discourse Markers',
                'answers' => [
                    ['text' => 'Notwithstanding', 'correct' => true],
                    ['text' => 'However', 'correct' => false],
                    ['text' => 'Moreover', 'correct' => false],
                    ['text' => 'Consequently', 'correct' => false],
                ],
            ],
            [
                'question' => 'The results were inconclusive; ___, further research is needed.',
                'skill' => 'Discourse Markers',
                'answers' => [
                    ['text' => 'thereby', 'correct' => false],
                    ['text' => 'whereas', 'correct' => false],
                    ['text' => 'hence', 'correct' => true],
                    ['text' => 'albeit', 'correct' => false],
                ],
            ],

            // Synonyms & Nuance (25-26)
            [
                'question' => 'Which word is closest in meaning to ephemeral?',
                'skill' => 'Synonyms & Nuance',
                'answers' => [
                    ['text' => 'Eternal', 'correct' => false],
                    ['text' => 'Fleeting', 'correct' => true],
                    ['text' => 'Permanent', 'correct' => false],
                    ['text' => 'Static', 'correct' => false],
                ],
            ],
            [
                'question' => 'Which word is opposite to meticulous?',
                'skill' => 'Synonyms & Nuance',
                'answers' => [
                    ['text' => 'Careful', 'correct' => false],
                    ['text' => 'Sloppy', 'correct' => true],
                    ['text' => 'Precise', 'correct' => false],
                    ['text' => 'Thorough', 'correct' => false],
                ],
            ],

            // Advanced Writing & Style (27-28)
            [
                'question' => 'Which phrase is redundant? The final outcome will be announced tomorrow.',
                'skill' => 'Advanced Writing & Style',
                'answers' => [
                    ['text' => 'final', 'correct' => true],
                    ['text' => 'outcome', 'correct' => false],
                    ['text' => 'announced', 'correct' => false],
                    ['text' => 'tomorrow', 'correct' => false],
                ],
            ],
            [
                'question' => 'Which sentence is grammatically emphatic?',
                'skill' => 'Advanced Writing & Style',
                'answers' => [
                    ['text' => 'It was the manager who approved the proposal.', 'correct' => true],
                    ['text' => 'The manager approved the proposal.', 'correct' => false],
                    ['text' => 'The proposal was approved by the manager.', 'correct' => false],
                    ['text' => 'Approving the proposal was the manager.', 'correct' => false],
                ],
            ],

            //Strategic Language Use (29-30)
            [
                'question' => 'The ___ of the novel lies in its intricate character development.',
                'skill' => 'Strategic Language Use',
                'answers' => [
                    ['text' => 'crux', 'correct' => true],
                    ['text' => 'climax', 'correct' => false],
                    ['text' => 'premise', 'correct' => false],
                    ['text' => 'plot', 'correct' => false],
                ],
            ],
            [
                'question' => 'The artist’s work is often described as ___, blending surrealism and realism.',
                'skill' => 'Strategic Language Use',
                'answers' => [
                    ['text' => 'eclectic', 'correct' => true],
                    ['text' => 'mundane', 'correct' => false],
                    ['text' => 'derivative', 'correct' => false],
                    ['text' => 'obsolete', 'correct' => false],
                ],
            ],
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'Question' => $questionData['question'],
                'Level' => 'C1',
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