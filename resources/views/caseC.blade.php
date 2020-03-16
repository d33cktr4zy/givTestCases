@extends('index')

@section('title')
Case C - Print Data
@endsection

@section('content')
<div class="container-fluid"> 
    <h3 class="text-center">Case C</h3> 
    <h3 class="text-center">Print Data</h3> 
    <div class="container" style="overflow-y: scroll; height: 300px">
        <div class="row col-12"> 
            <div class="column"> 
                <h4>Description</h4> 
                <p> <div> 
                    <p> <div>Write a query to print the respective hacker_id and name of hackers who achieved full scores for more than</div> <div>one challenge.</div> <div>Order your output in descending order by the total number of challenges in which the hacker earned a full</div> <div>score. If more than one hacker received full scores in same number of challenges, then sort them by</div> <div>ascending hacker_id.</div> <div>Please use the next tables as your reference. Use SQL or No-SQL for your queries. If you used SQL, please</div> <div>include the SQL query for creating table too.</div></p>
                </div> </p>
            </div>                 
        </div>             

        <div class="row col-12"> 
            <div class="column"> 
                <h4><i>Table Hackers</i></h4> 
                <p>The hacker_id is the id of the hacker, and name is the name of the hacker.</p>
                <img src="../images/hacker_table.jpg" />
            </div>                 
            <h2></h2>
        </div>
        <div class="row col-12"> 
            <div class="column"> 
                <h4><i>Table Difficulty</i></h4> 
                <p>The difficult_level is the level of difficulty of the challenge, and score is the score of the challenge for the
                difficulty level.</p>
                <img src="../images/difficulty_table.jpg" />
            </div>                 
            <h2></h2>
        </div>
        <div class="row col-12">
            <div class="column"> 
                <h4><i>Table Challenge</i></h4> 
                <p>The challenge_id is the id of the challenge, the hacker_id is the id of the hacker who created the challenge,
                and difficulty_level is the level of difficulty of the challenge</p>
                <img src="../images/challange_table.jpg">
            </div>                 
            <h2></h2>
        </div>
        <div class="row col-12">
            <div class="column">
                <h4><i>Table Submission</i></h4> 
                <p>The submission_id is the id of the submission, hacker_id is the id of the hacker who made the 
                    submission, challenge_id is the id of the challenge that the submission belongs to, and score is score of
                the submission</p>
                <img src="../images/submission_table.jpg">
            </div>                 

        </div> 
    </div>                                      
</div>
@endsection

@section('solution')
<div class="container-fluid" id='solution'>
    <div class="row">
        <div class="col-12">

            <h3 class="text-center">Solution</h3>
        </div>
    </div>
    <div class="container" style="height: 300px; overflow-y: scroll;">
        <div class="row">
            <div class="col-xs-12 col-sm-6 jumbotron">
                <h3>create tbhackers</h3>
                <samp class="pre-scrollable">
                    CREATE TABLE `tbhackers` (
                    `hacker_id` int(11) NOT NULL,
                    `name` varchar(20) NOT NULL,
                    PRIMARY KEY (`hacker_id`)
                    )
                </samp>
            </div>

            <div class="col-xs-12 col-sm-6 jumbotron">
                <h3>create tbchallenge</h3>
                <samp class="pre-scrollable">
                    CREATE TABLE `tbchallenge` (
                    `challenge_id` varchar(255) NOT NULL,
                    `hacker_id` int(11) NOT NULL,
                    `difficulty_level` int(255) NOT NULL,
                    PRIMARY KEY (`challenge_id`)
                    )
                </samp>
            </div>


            <div class="col-xs-12 col-sm-6 jumbotron">
                <h3>create tbdifficulty</h3>
                <samp class="pre-scrollable">
                    CREATE TABLE `tbdifficulty` (
                    `difficulty_level` smallint(6) NOT NULL,
                    `score` int(4) NOT NULL,
                    PRIMARY KEY (`difficulty_level`)
                    )
                </samp>
            </div>

            <div class="col-xs-12 col-sm-6 jumbotron">
                <h3>create tbsubmission</h3>
                <samp class="pre-scrollable">
                    CREATE TABLE `tbsubmission` (
                    `submission_id` int(11) NOT NULL,
                    `hacker_id` int(11) NOT NULL,
                    `challenge_id` int(11) DEFAULT NULL,
                    `score` varchar(255) DEFAULT NULL,
                    PRIMARY KEY (`submission_id`)
                    )

                </samp>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">
                    Querries
                </h3>
            </div>  
        </div>
        <div class="row" style="height: 350px; overflow-y: scroll;">
            <div class="col-xs-12 col-sm-6">
                <pre class="pre-scrollable">
SELECT 
s.hacker_id, h.`name`
from
tbsubmission s
LEFT OUTER JOIN
tbchallenge c on c.challenge_id = s.challenge_id
LEFT OUTER JOIN
tbdifficulty d on d.difficulty_level = c.difficulty_level
LEFT OUTER JOIN
tbhackers h on h.hacker_id = s.hacker_id
where 
s.score = d.score 
GROUP BY 
s.hacker_id
HAVING
COUNT(s.hacker_id) > 1
ORDER BY
COUNT(s.hacker_id) DESC,
s.hacker_id ASC
                </pre>
            </div>
            
            <div class="col-xs-12 col-sm-6">
                <table border="1px">
                    <thead>
                        <th>hacker_id</th>
                        <th>name</th>
                    </thead>
                    <tr>
                        <td>90411</td>
                        <td>Joe</td>
                    </tr>          
                </table>
            </div>
        </div>
        

    </div>  
</div>

@endsection

@section('result')

@endsection
