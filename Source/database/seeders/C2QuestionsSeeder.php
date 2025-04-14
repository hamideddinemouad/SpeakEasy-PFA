<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class C2QuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // Advanced Grammar & Syntax (1-4)
            [
                'question' => '___ the circumstances, the outcome was nothing short of miraculous.',
                'skill' => 'Advanced Grammar & Syntax',
                'answers' => [
                    ['text' => 'Given', 'correct' => true],
                    ['text' => 'Granting', 'correct' => false],
                    ['text' => 'Presuming', 'correct' => false],
                    ['text' => 'Supposing', 'correct' => false],
                ],
            ],
            [
                'question' => 'Not for a moment ___ she suspect the truth.',
                'skill' => 'Advanced Grammar & Syntax',
                'answers' => [
                    ['text' => 'did', 'correct' => true],
                    ['text' => 'had', 'correct' => false],
                    ['text' => 'would', 'correct' => false],
                    ['text' => 'might', 'correct' => false],
                ],
            ],
            [
                'question' => 'The proposal, ___ it were, was met with unanimous disdain.',
                'skill' => 'Advanced Grammar & Syntax',
                'answers' => [
                    ['text' => 'as', 'correct' => true],
                    ['text' => 'like', 'correct' => false],
                    ['text' => 'though', 'correct' => false],
                    ['text' => 'such', 'correct' => false],
                ],
            ],
            [
                'question' => 'So ___ was the performance that critics hailed it as revolutionary.',
                'skill' => 'Advanced Grammar & Syntax',
                'answers' => [
                    ['text' => 'transcendent', 'correct' => true],
                    ['text' => 'transcending', 'correct' => false],
                    ['text' => 'transcended', 'correct' => false],
                    ['text' => 'transcend', 'correct' => false],
                ],
            ],

            // Idioms & Figurative Language (5-6)
            [
                'question' => 'His apology was just ___; he clearly didn’t mean it.',
                'skill' => 'Idioms & Figurative Language',
                'answers' => [
                    ['text' => 'lip service', 'correct' => true],
                    ['text' => 'a skeleton crew', 'correct' => false],
                    ['text' => 'a white elephant', 'correct' => false],
                    ['text' => 'a red herring', 'correct' => false],
                ],
            ],
            [
                'question' => 'After years of rivalry, they finally ___.',
                'skill' => 'Idioms & Figurative Language',
                'answers' => [
                    ['text' => 'buried the hatchet', 'correct' => true],
                    ['text' => 'beat around the bush', 'correct' => false],
                    ['text' => 'bit the bullet', 'correct' => false],
                    ['text' => 'blew off steam', 'correct' => false],
                ],
            ],

            // Advanced Vocabulary (7-8)
            [
                'question' => 'The diplomat’s ___ remarks avoided causing offense.',
                'skill' => 'Advanced Vocabulary',
                'answers' => [
                    ['text' => 'circumspect', 'correct' => true],
                    ['text' => 'candid', 'correct' => false],
                    ['text' => 'caustic', 'correct' => false],
                    ['text' => 'capricious', 'correct' => false],
                ],
            ],
            [
                'question' => 'Her ___ demeanor belied her intense ambition.',
                'skill' => 'Advanced Vocabulary',
                'answers' => [
                    ['text' => 'unassuming', 'correct' => true],
                    ['text' => 'ostentatious', 'correct' => false],
                    ['text' => 'bombastic', 'correct' => false],
                    ['text' => 'imperious', 'correct' => false],
                ],
            ],

            // Ellipsis & Substitution (9-10)
            [
                'question' => '“Will they agree?” “I hope ___.”',
                'skill' => 'Ellipsis & Substitution',
                'answers' => [
                    ['text' => 'so', 'correct' => true],
                    ['text' => 'it', 'correct' => false],
                    ['text' => 'that', 'correct' => false],
                    ['text' => 'such', 'correct' => false],
                ],
            ],
            [
                'question' => 'He claims to have read the report, but ___ clearly not.',
                'skill' => 'Ellipsis & Substitution',
                'answers' => [
                    ['text' => 'he has', 'correct' => false],
                    ['text' => 'he is', 'correct' => false],
                    ['text' => 'he’s', 'correct' => true],
                    ['text' => 'he’d', 'correct' => false],
                ],
            ],

            // Stylistic Nuance & Register (11-12)
            [
                'question' => 'Which sentence is hyperbolic?',
                'skill' => 'Stylistic Nuance & Register',
                'answers' => [
                    ['text' => 'I’ve told you a million times!', 'correct' => true],
                    ['text' => 'The meeting starts at 3 PM.', 'correct' => false],
                    ['text' => 'She’s a competent engineer.', 'correct' => false],
                    ['text' => 'It rained yesterday.', 'correct' => false],
                ],
            ],
            [
                'question' => 'Which phrase is archaic?',
                'skill' => 'Stylistic Nuance & Register',
                'answers' => [
                    ['text' => 'Forsooth!', 'correct' => true],
                    ['text' => 'No worries!', 'correct' => false],
                    ['text' => 'Cool!', 'correct' => false],
                    ['text' => 'Awesome!', 'correct' => false],
                ],
            ],

            // Advanced Phrasal Verbs (13-14)
            [
                'question' => 'The scandal ___ irreparable damage to his reputation.',
                'skill' => 'Advanced Phrasal Verbs',
                'answers' => [
                    ['text' => 'wrought', 'correct' => true],
                    ['text' => 'brought about', 'correct' => false],
                    ['text' => 'carried off', 'correct' => false],
                    ['text' => 'laid down', 'correct' => false],
                ],
            ],
            [
                'question' => 'She ___ her childhood dreams despite the odds.',
                'skill' => 'Advanced Phrasal Verbs',
                'answers' => [
                    ['text' => 'clung to', 'correct' => true],
                    ['text' => 'fell back on', 'correct' => false],
                    ['text' => 'gave up on', 'correct' => false],
                    ['text' => 'ran out of', 'correct' => false],
                ],
            ],

            // Prepositions & Collocations (15-16)
            [
                'question' => 'His actions were ___ contempt of court.',
                'skill' => 'Prepositions & Collocations',
                'answers' => [
                    ['text' => 'in', 'correct' => true],
                    ['text' => 'under', 'correct' => false],
                    ['text' => 'with', 'correct' => false],
                    ['text' => 'for', 'correct' => false],
                ],
            ],
            [
                'question' => 'The theory is ___ odds with empirical data.',
                'skill' => 'Prepositions & Collocations',
                'answers' => [
                    ['text' => 'at', 'correct' => true],
                    ['text' => 'in', 'correct' => false],
                    ['text' => 'on', 'correct' => false],
                    ['text' => 'by', 'correct' => false],
                ],
            ],

            // Modal Perfects (17-18)
            [
                'question' => 'You ___ the train if you’d left earlier.',
                'skill' => 'Modal Perfects',
                'answers' => [
                    ['text' => 'could have caught', 'correct' => true],
                    ['text' => 'can catch', 'correct' => false],
                    ['text' => 'might catch', 'correct' => false],
                    ['text' => 'should catch', 'correct' => false],
                ],
            ],
            [
                'question' => 'They ___ the risks before proceeding.',
                'skill' => 'Modal Perfects',
                'answers' => [
                    ['text' => 'ought to have considered', 'correct' => true],
                    ['text' => 'must consider', 'correct' => false],
                    ['text' => 'should consider', 'correct' => false],
                    ['text' => 'needn’t have considered', 'correct' => false],
                ],
            ],

            // Inversion & Fronting (19-20)
            [
                'question' => '___ should the public tolerate such incompetence.',
                'skill' => 'Inversion & Fronting',
                'answers' => [
                    ['text' => 'Under no circumstances', 'correct' => true],
                    ['text' => 'In any case', 'correct' => false],
                    ['text' => 'On the contrary', 'correct' => false],
                    ['text' => 'By all means', 'correct' => false],
                ],
            ],
            [
                'question' => '___ that the error was detected.',
                'skill' => 'Inversion & Fronting',
                'answers' => [
                    ['text' => 'Lucky it was', 'correct' => true],
                    ['text' => 'It was lucky', 'correct' => false],
                    ['text' => 'Luckily', 'correct' => false],
                    ['text' => 'Luck was', 'correct' => false],
                ],
            ],

            // Synonyms & Lexical Precision (21-22)
            [
                'question' => 'Which word is closest in meaning to perfunctory?',
                'skill' => 'Synonyms & Lexical Precision',
                'answers' => [
                    ['text' => 'Cursory', 'correct' => true],
                    ['text' => 'Meticulous', 'correct' => false],
                    ['text' => 'Genuine', 'correct' => false],
                    ['text' => 'Lethargic', 'correct' => false],
                ],
            ],
            [
                'question' => 'Which term is antonymous to obsequious?',
                'skill' => 'Synonyms & Lexical Precision',
                'answers' => [
                    ['text' => 'Assertive', 'correct' => true],
                    ['text' => 'Sycophantic', 'correct' => false],
                    ['text' => 'Submissive', 'correct' => false],
                    ['text' => 'Deferential', 'correct' => false],
                ],
            ],

            // Error Correction (23-24)
            [
                'question' => 'Identify the error: She alluded at the possibility of restructuring.',
                'skill' => 'Error Correction',
                'answers' => [
                    ['text' => 'alluded', 'correct' => false],
                    ['text' => 'at', 'correct' => true],
                    ['text' => 'possibility', 'correct' => false],
                    ['text' => 'restructuring', 'correct' => false],
                ],
            ],
            [
                'question' => 'Identify the error: He was acquitted from all charges.',
                'skill' => 'Error Correction',
                'answers' => [
                    ['text' => 'acquitted', 'correct' => false],
                    ['text' => 'from', 'correct' => true],
                    ['text' => 'all', 'correct' => false],
                    ['text' => 'charges', 'correct' => false],
                ],
            ],

            // Literary Devices (25-26)
            [
                'question' => '“The wind whispered through the trees” uses ___.',
                'skill' => 'Literary Devices',
                'answers' => [
                    ['text' => 'personification', 'correct' => true],
                    ['text' => 'hyperbole', 'correct' => false],
                    ['text' => 'metaphor', 'correct' => false],
                    ['text' => 'oxymoron', 'correct' => false],
                ],
            ],
            [
                'question' => '“Time is a thief” is an example of ___.',
                'skill' => 'Literary Devices',
                'answers' => [
                    ['text' => 'metaphor', 'correct' => true],
                    ['text' => 'simile', 'correct' => false],
                    ['text' => 'irony', 'correct' => false],
                    ['text' => 'euphemism', 'correct' => false],
                ],
            ],

            // Connotation & Register (27-28)
            [
                'question' => 'Which word is most formal?',
                'skill' => 'Connotation & Register',
                'answers' => [
                    ['text' => 'Terminate', 'correct' => true],
                    ['text' => 'End', 'correct' => false],
                    ['text' => 'Stop', 'correct' => false],
                    ['text' => 'Axe', 'correct' => false],
                ],
            ],
            [
                'question' => 'Which phrase is colloquial?',
                'skill' => 'Connotation & Register',
                'answers' => [
                    ['text' => 'Hit the sack', 'correct' => true],
                    ['text' => 'Retire for the night', 'correct' => false],
                    ['text' => 'Go to bed', 'correct' => false],
                    ['text' => 'Fall asleep', 'correct' => false],
                ],
            ],

            // Linguistic Precision & Nuance (29-30)
            [
                'question' => 'The ___ of her argument lay in its logical consistency.',
                'skill' => 'Linguistic Precision & Nuance',
                'answers' => [
                    ['text' => 'cogency', 'correct' => true],
                    ['text' => 'fallacy', 'correct' => false],
                    ['text' => 'verbosity', 'correct' => false],
                    ['text' => 'ambiguity', 'correct' => false],
                ],
            ],
            [
                'question' => 'His ___ explanation left no room for doubt.',
                'skill' => 'Linguistic Precision & Nuance',
                'answers' => [
                    ['text' => 'unequivocal', 'correct' => true],
                    ['text' => 'ambiguous', 'correct' => false],
                    ['text' => 'cryptic', 'correct' => false],
                    ['text' => 'convoluted', 'correct' => false],
                ],
            ],
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'Question' => $questionData['question'],
                'Level' => 'C2',
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