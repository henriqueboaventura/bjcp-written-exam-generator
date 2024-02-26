<?php

namespace App\Livewire;

use Livewire\Component;

class Exam extends Component
{
    public $trueFalseQuestions = [];
    private $availableTrueFalseQuestions = [
        1 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'A competition organizer may serve as the judge director and may also serve as a judge, provided this person has no knowledge of the association between entries and entrants [1].',
        ],
        2 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'A competition’s judge director may serve as a judge, provided this person has no knowledge of the association between entries and entrants.',
        ],
        3 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'A competition organizer may serve as the judge director, provided this person has no knowledge of the association between entries and entrants.',
        ],
        4 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'A competition’s judge director may not serve as a judge, even if this person has no knowledge of the association between entries and entrants.',
        ],
        5 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'A competition organizer may not serve as a judge, even if this person has no knowledge of the association between entries and entrants.',
        ],
        6 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'A competition’s judge director may serve as the competition organizer and may also serve as a judge, provided this person has no knowledge of the association between entries and entrants.',
        ],
        7 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'An individual with knowledge of the association between entries and entrants may not serve as a judge.',
        ],
        8 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'A member of the competition staff with access to information that associates entries with entrants may serve as a judge, provided this person does not divulge information about entries and entrants to other judges.',
        ],
        9 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The “head” judge at a table should try to tutor apprentice or lower-rank judges if time permits.',
        ],
        10 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'The steward at the table has sole responsibility for completing the Cover Sheets for beers in each flight.',
        ],
        11 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The “head” judge at the table has sole responsibility for completing the Cover Sheets for beers in each flight.',
        ],
        12 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The “head” judge at a table should fill out Cover Sheets for beers in his or her flight as directed by the competition management.',
        ],
        13 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'The “head” judge at a table has no responsibility for filling out Cover Sheets for beers in his or her flight unless directed to do so by the competition management.',
        ],
        14 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The “head” judge at the table has sole responsibility for completing the Cover Sheets for beers in each flight but with the agreement of the steward may delegate the completion of the Cover Sheets to the steward.',
        ],
        15 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The “head” judge, with the agreement of the steward, may delegate filling in of the Cover Sheets for beers in his or her flight to the steward.',
        ],
        16 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'There is no need for the “head” judge to complete the Flight Summary Sheet – the competition organizer can obtain all that information from the cover sheets.',
        ],
        17 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'If possible, there should be at least one BJCP-ranked judge in every flight.',
        ],
        18 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'When Non-BJCP judges evaluate entries in a competition, each Non-BJCP judge should be paired with a BJCP judge.',
        ],
        19 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Non-BJCP judges may only evaluate entries if authorized by the judge director, and Non-BJCP judges should be paired with BJCP judges when possible.',
        ],
        20 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'To reduce stray odors and flavors present, beverages and foods other than water, bread or crackers should not be brought to the judging table.',
        ],
        21 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'It is acceptable to bring food items other than bread, crackers, and water to the judging table.',
        ],
        22 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'You must filter out strong scents from fellow judges or the environment from your mind rather than discussing the problem with the competition organizer.',
        ],
        23 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Strong scents from the environment or other judges or stewards should be brought to the attention of the competition organizer.',
        ],
        24 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Because entries cannot have any identifying marks, it is OK for a judge to judge beers in a category he or she has entered.',
        ],
        25 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'If a judge is assigned to judge a category that he/she has entered, that judge should ask the competition organizer to reassign him/her to another category.',
        ],
        26 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'If a judge is assigned to a category that he or she has entered, the judge should go ahead and evaluate the entries in that category without notifying the judge director or competition organizer.',
        ],
        27 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Judges should not review the style being judged from the BJCP Style Guidelines while at the judging table prior to judging that style.',
        ],
        28 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Judges may invite stewards to taste the beers in a flight, if there’s enough sample to share.',
        ],
        29 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'It is acceptable to change the order in which you judge the beers on your flight sheet from how it was printed.',
        ],
        30 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Beers must be evaluated in the sequence specified on the flight sheet.',
        ],
        31 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'If you have eaten spicy or greasy food within a few hours prior to judging, you should use mouthwash or antiseptic rinse before judging.',
        ],
        32 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'You should avoid eating spicy or greasy food within a few hours prior to judging.',
        ],
        33 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Spicy or greasy foods should be avoided prior to a judging event because they can reduce a judge’s sensitivity to the aromas and flavors of beer.',
        ],
        34 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Perfumed shampoos and colognes should be avoided prior to a judging event because they can reduce a judge’s sensitivity to the aromas of beer.',
        ],
        35 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'It is a good idea to take a decongestant prior to a judging event to increase your sensitivity to the aromas of beer.',
        ],
        36 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Calibrations beers are selected to be the standard against which entries should be judged.',
        ],
        37 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'It is the responsibility of the “head” judge, in consultation with the other judges in a flight, to assign a consensus score to each entry.',
        ],
        38 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'It is not necessary for scores produced by the judges on a panel to be within seven points (or less if directed by the competition director) of each other.',
        ],
        39 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'After discussing the initial scores, judges should adjust their final scores to be within seven points (or less if directed by the competition director).',
        ],
        40 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Judges must adjust their scores to be within seven points (or less if directed by the competition director) of each other as part of developing a consensus score for the beer.',
        ],
        41 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The consensus score assigned to the beer is not necessarily an average score.',
        ],
        42 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'When judging, It is important to evaluate entries quickly and also complete the score sheets thoroughly and completely..',
        ],
        43 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'On average, experienced judges should be able to completely evaluate a beer, including arriving at a consensus, in 10 minutes.',
        ],
        44 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'When there is a discrepancy in the scores for a given beer, the lower-ranked judges should yield to the opinion of the highest ranked BJCP judge at the table.',
        ],
        45 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'It is acceptable to remove offensive smelling entries from the judging table after they have been evaluated.',
        ],
        46 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'A judge must disqualify an entry if the bottle has raised lettering or the cap has identifying marks.',
        ],
        47 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'A judge may disqualify an entry if it has an improper bottle or cap.',
        ],
        48 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Only the judge director or competition organizer can disqualify an entry.',
        ],
        49 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The results of the bottle inspection does not affect the scoring.',
        ],
        50 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Snide or rude comments are unacceptable on scoresheets.',
        ],
        51 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Pour each entry in a manner that gives it its optimum appearance, keeping in mind that some entries may be over- or under-carbonated.',
        ],
        52 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'When you suspect an entry has been placed in the wrong flight based on the style being judged, you should request that it be judged in a different flight instead.',
        ],
        53 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'When you suspect an entry has been placed in the wrong flight based on the style being judged, you should consult with the judge director or competition organizer.',
        ],
        54 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Sniff the entry immediately after pouring to ensure proper evaluation of volatile aromatics.',
        ],
        55 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'There is no need to sniff the aroma immediately after pouring the entry into the glass.',
        ],
        56 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Judges should complete the evaluation of each entry before moving on to the next.',
        ],
        57 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'It is not necessary to offer any feedback for improvement if you score a beer above 40.',
        ],
        58 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'It is common practice to refrain from sharing your thoughts while judging a beer until the other judges have completed their scoresheet.',
        ],
        59 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'If you are very familiar with a beer style, it is preferable to disregard the BJCP Style Guidelines and rely on your personal expertise instead.',
        ],
        60 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'If rushed, it’s acceptable to write only comments and an overall score on a scoresheet, leaving the scores for the subsections blank.',
        ],
        61 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'If rushed, it’s acceptable to write only 1-2 comments on a scoresheet as long as the numeric score is filled out.',
        ],
        62 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'If a beer is a “gusher” or has an unpleasant aroma upon opening, a judge may assign a courtesy score of 13 without tasting and commenting on the characteristics of the beer.',
        ],
        63 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'All beers should be tasted and scored, even if they are “gushers” or have an unpleasant aroma upon opening.',
        ],
        64 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'It is appropriate to penalize the entrant if the beer is not served at the proper temperature.',
        ],
        65 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'If the beers are not served at the proper temperature, judges should work with the competition staff to resolve the problem.',
        ],
        66 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'In each section of a scoresheet, you should only comment upon the most prominent features of each entry, not subtle characteristics.',
        ],
        67 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Judges’ comments must not include phrases like “if you used ..”',
        ],
        68 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Judges’ comments must not include phrases like “did you ..”',
        ],
        69 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Judges’ comments must include a complete evaluation of the sensory aspects of the entry and how those aspects relate to the style guidelines.',
        ],
        70 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Judges’ comments should be constructive and reflect knowledge of the brewing, fermentation, bottling, and handling process.',
        ],
        71 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Judges’ comments need to provide information on how to improve the entry as warranted.',
        ],
        72 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Scores should not be assigned to the aroma section immediately because the entry’s aroma profile may change over time.',
        ],
        73 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Each section must be scored with a number prior to writing any comments, to best capture your first impressions.',
        ],
        74 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'To assure objectivity, you should never write your full name or put contact information on the scoresheet.',
        ],
        75 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'You should write your full name and judging rank on each scoresheet.',
        ],
        76 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'You should always fill out the “Style Scales” on the scoresheet, as a good check against your scores.',
        ],
        77 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'You should use the “Overall Impression” section of the scoresheet to refer to how the entry compares to other entries in the flight.',
        ],
        78 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'You should use the “Overall Impression” section of the scoresheet to comment on how much you enjoyed the entry or provide suggestions for how to improve the beer.',
        ],
        79 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'A score in the “Outstanding” range is reserved for entries that not only lack flaws but also have the hard-to-define “extraordinary” character that great beers have.',
        ],
        80 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'The courteous lower limit for scores assigned to “Problematic” beers is 6 points, with one point for each section of the scoresheet.',
        ],
        81 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The courteous lower limit for scores assigned to “Problematic” beers is 13 points.',
        ],
        82 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'If judges require more pours than one bottle to judge an entry, the “head” judge should ask the steward to request a second bottle from the cellar master [2].',
        ],
        83 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'It is preferable to use ink on scoresheets so that your scores and comments cannot be altered by contest personnel.',
        ],
        84 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'It is preferable to use mechanical pencils, rather than wooden pencils, on scoresheets so that wood odors do not interfere with beer aromas.',
        ],
        85 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'It is acceptable to request a second bottle to give the entry a fair chance at an accurate judging if a beer is a “gusher” or tastes infected.',
        ],
        86 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Entrants may contact the judge, the competition director, or their BJCP Regional Representative if they are dissatisfied with any aspect of their scoresheets.',
        ],
        87 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'When your flight has finished, you should avoid having conversations that might distract other judges who have not yet finished their flights.',
        ],
        88 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'When your flight has finished, it is acceptable to visit other flights still in progress to see how beers you have entered are faring.',
        ],
        89 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Because it may have been entered by a person in the room, it is polite to refrain from publicly deriding a “problem” beer that you have scored during a competition.',
        ],
        90 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Judges from outside the table should not be consulted on a beer unless the judges at the table cannot reach a consensus score, and then only if they all agree to the consultation.',
        ],
        91 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'BJCP Apprentice judges have not yet taken the BJCP Beer Judging Exam.',
        ],
        92 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Novice is not an official BJCP judge rank.',
        ],
        93 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'One can obtain the BJCP Recognized rank without acquiring judging experience points.',
        ],
        94 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'One can obtain the BJCP Recognized rank without acquiring non-judging experience points.',
        ],
        95 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'To become a BJCP Certified judge, it is sufficient to pass the Entrance Exam, score at least 70% on the Beer Judging Exam and earn 5 judging points.',
        ],
        96 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'To become a BJCP Certified judge, it is sufficient to pass the Entrance Exam, score at least 70% on the Beer Judging Exam and earn 5 experience points.',
        ],
        97 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'The maximum score on the Beer Judging Exam for the BJCP Certified rank is 79%.',
        ],
        98 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'To become a BJCP National judge, it is sufficient to score 80% on the Beer Judging Exam and accumulate 20 experience points.',
        ],
        99 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'To become a BJCP National judge, it is sufficient to score 80% on the Beer Judging Exam and accumulate 20 experience points, with at least half of them from judging.',
        ],
        100 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'One can obtain the BJCP National rank without acquiring judging experience points.',
        ],
        101 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'One can obtain the BJCP National rank without acquiring non-judging experience points.',
        ],
        102 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'BJCP Master judges must have a minimum score of 90% on the combined written and tasting exams and at least 40 judging points.',
        ],
        103 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'BJCP Master judges must score at least 90% on the combined written and tasting exams and earn at least 50 experience points, with at least half of them from judging.',
        ],
        104 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'The maximum score on the combined written and tasting exams for the BJCP National rank is 89%.',
        ],
        105 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'BJCP Master judges must score at least 90% on the combined written and tasting exams and fulfill a Grand Master Service Requirement.',
        ],
        106 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'BJCP Grand Master judges must score at least 95% on the combined written and tasting exams.',
        ],
        107 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'BJCP Grand Master judges must score at least 90% on the combined written and tasting exams.',
        ],
        108 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Each additional BJCP Grand Master level requires an additional 100 experience points.',
        ],
        109 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'BJCP Honorary Grand Master judges do not have to take the BJCP exam.',
        ],
        110 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'The BJCP Honorary Grand Master rank is bestowed upon professional brewers when they judge at homebrew competitions.',
        ],
        111 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Honorary Master is a temporary rank bestowed on operatives of the BJCP.',
        ],
        112 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'The BJCP Grand Master rank requires the same minimum score on the combined written and tasting exams as the Master rank.',
        ],
        113 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'The BJCP Grand Master rank requires the same minimum experience points as the Master rank.',
        ],
        114 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'The only difference in requirements between the BJCP Master and Grand Master ranks is that the Grand Master rank requires a GMSR.',
        ],
        115 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Each BJCP Grand Master level has additional requirements for exam grading.',
        ],
        116 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'A BJCP Grand Master Service Requirement can be fulfilled by grading exams.',
        ],
        117 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'A BJCP Grand Master Service Requirement can be fulfilled by organizing competitions.',
        ],
        118 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'A BJCP Grand Master Service Requirement can be fulfilled just by serving on the BJCP Board.',
        ],
        119 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'At least one-half of the experience points required for any BJCP judge rank must be from judging.',
        ],
        120 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Judging at homebrew competitions is the only way to earn BJCP judging points.',
        ],
        121 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'BJCP judges can earn non-judging experience points for participating in BJCP Continuing Education Program activities.',
        ],
        122 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Judging experience points can only be earned by judging in a competition or proctoring a BJCP exam.',
        ],
        123 => [
            'answer' => false,
            'user_answer' => null,
            'question' => 'Stewards at homebrew competitions earn BJCP judging points if they taste the beers with the judges.',
        ],
        124 => [
            'answer' => true,
            'user_answer' => null,
            'question' => 'Stewards at homebrew competitions earn BJCP experience points.',
        ],
    ];

    function mount() {
        foreach(array_rand($this->availableTrueFalseQuestions, 20) as $key) {
            $this->trueFalseQuestions[] = $this->availableTrueFalseQuestions[$key];
        }
    }

    public function check($id, $answer) {

        $this->trueFalseQuestions[$id]['user_answer'] = $answer;
    }

    public function render()
    {
        return view('livewire.exam');
    }
}
