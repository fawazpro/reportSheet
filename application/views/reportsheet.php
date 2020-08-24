<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="<?= base_url('assets/ui/dist/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/ui/assets/extra-libs/c3/c3.min.css"') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <script src="<?= base_url('assets/ui/assets/libs/jquery/dist/jquery.min.js') ?>"></script>



    <title>Report Sheet</title>
</head>

<body>
    <div class="container" id="rssh">
        <header>
            <img src="<?= base_url('assets/img/LOGO.png') ?>" class="logo" alt="school logo" />
            <div class="name">
                <h1>LIKEMINDS MODEL ACADEMY, ABK</h1>
                <p>2019/2020 FIRST TERM REPORT SHEET</p>
                <p>MOTTO: In Allah we Trust</p>
            </div>
        </header>

        <!-- <div class="basic-info">
            <p>NAME: <span><?= $info['name'] ?></span></p>
            <p>Class: <span><?= $info['class'] ?></span></p>
        </div> -->

        <div class="gen-info">
            <div class="basic-info">
                <img src="<?= base_url('assets/img/passport.png') ?>" alt="">
                <p>| <span><?= $info['name'] ?></span> |</p>
            </div>
            <div class="attendance-info">
                <h5>ATTENDANCE</h5>
                <p>No of times <b>school opened</b>: <span>66</span></p>
                <p>No of times <b>present</b>: <span>56</span></p>
                <p>No of times <b>absent</b>: <span>10</span></p>
                <p><b><?= $info['class'] ?> </b></p>
            </div>
            <div class="class-info">
                <p>No of <b>Students in Class</b>: <span>3</span></p>
                <p>Class <b>average Percentage</b>: <span>61%</span></p>
                <p><b>General Grade</b>: <span>A</span></p>
                <p><b>Student Percentage</b>: <span>80%</span></p>
                <p>Date <b>School Closes</b>: <span>19th, April</span></p>
                <p>Date <b>School Resumes</b>: <span>3rd, May</span></p>
            </div>
        </div>

        <div class="mid">
            <div class="report">
                <h3>COGNITIVE ABILITY OF STUDENT</h3>
                <table class="striped centered table">
                    <thead class="thead">
                        <tr>
                            <th>SUBJECTS</th>
                            <th>OBTAINABLE</th>
                            <th>C.A</th>
                            <th>EXAM</th>
                            <th>TOTAL</th>
                            <th>REMARKS</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td>Mathematics</td>
                            <td>100</td>
                            <td><?= $info['mt_cat'] ?></td>
                            <td><?= $info['mt_exam'] ?></td>
                            <td><?= $info['mt_total'] ?></td>
                            <td><?php
                                function grade($score)
                                {
                                    switch ($score) {
                                        case ($score > 70):
                                            return 'A';
                                            break;
                                        case ($score > 59 && $score < 69):
                                            return 'B';
                                            break;

                                        default:
                                            return 'N';
                                            break;
                                    }
                                };
                                echo grade($info['mt_total']);
                                ?></td>
                        </tr>
                        <tr>
                            <td>English Language</td>
                            <td>100</td>
                            <td><?= $info['en_cat'] ?></td>
                            <td><?= $info['en_exam'] ?></td>
                            <td><?= $info['en_total'] ?></td>
                            <td><?= grade($info['en_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Basic Science</td>
                            <td>100</td>
                            <td><?= $info['bs_cat'] ?></td>
                            <td><?= $info['bs_exam'] ?></td>
                            <td><?= $info['bs_total'] ?></td>
                            <td><?= grade($info['bs_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Social Studies</td>
                            <td>100</td>
                            <td><?= $info['ss_cat'] ?></td>
                            <td><?= $info['ss_exam'] ?></td>
                            <td><?= $info['ss_total'] ?></td>
                            <td><?= grade($info['ss_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Computer Studies</td>
                            <td>100</td>
                            <td><?= $info['it_cat'] ?></td>
                            <td><?= $info['it_exam'] ?></td>
                            <td><?= $info['it_total'] ?></td>
                            <td><?= grade($info['it_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Agricultural Sci.</td>
                            <td>100</td>
                            <td><?= $info['ag_cat'] ?></td>
                            <td><?= $info['ag_exam'] ?></td>
                            <td><?= $info['ag_total'] ?></td>
                            <td><?= grade($info['ag_total']) ?></td>
                        </tr>
                        <tr>
                            <td>I.R.K</td>
                            <td>100</td>
                            <td><?= $info['is_cat'] ?></td>
                            <td><?= $info['is_exam'] ?></td>
                            <td><?= $info['is_total'] ?></td>
                            <td><?= grade($info['is_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Civic Education</td>
                            <td>100</td>
                            <td><?= $info['ci_cat'] ?></td>
                            <td><?= $info['ci_exam'] ?></td>
                            <td><?= $info['ci_total'] ?></td>
                            <td><?= grade($info['ci_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Qur'an Studies</td>
                            <td>100</td>
                            <td><?= $info['qs_cat'] ?></td>
                            <td><?= $info['qs_exam'] ?></td>
                            <td><?= $info['qs_total'] ?></td>
                            <td><?= grade($info['qs_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Basic Technology</td>
                            <td>100</td>
                            <td><?= $info['bt_cat'] ?></td>
                            <td><?= $info['bt_exam'] ?></td>
                            <td><?= $info['bt_total'] ?></td>
                            <td><?= grade($info['bt_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Home Economics</td>
                            <td>100</td>
                            <td><?= $info['he_cat'] ?></td>
                            <td><?= $info['he_exam'] ?></td>
                            <td><?= $info['he_total'] ?></td>
                            <td><?= grade($info['he_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Business Studies</td>
                            <td>100</td>
                            <td><?= $info['bu_cat'] ?></td>
                            <td><?= $info['bu_exam'] ?></td>
                            <td><?= $info['bu_total'] ?></td>
                            <td><?= grade($info['bu_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Yourba</td>
                            <td>100</td>
                            <td><?= $info['yo_cat'] ?></td>
                            <td><?= $info['yo_exam'] ?></td>
                            <td><?= $info['yo_total'] ?></td>
                            <td><?= grade($info['yo_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Creative Art</td>
                            <td>100</td>
                            <td><?= $info['ca_cat'] ?></td>
                            <td><?= $info['ca_exam'] ?></td>
                            <td><?= $info['ca_total'] ?></td>
                            <td><?= grade($info['ca_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Arabic Language</td>
                            <td>100</td>
                            <td><?= $info['al_cat'] ?></td>
                            <td><?= $info['al_exam'] ?></td>
                            <td><?= $info['al_total'] ?></td>
                            <td><?= grade($info['al_total']) ?></td>
                        </tr>
                        <tr>
                            <td>French Language</td>
                            <td>100</td>
                            <td><?= $info['fr_cat'] ?></td>
                            <td><?= $info['fr_exam'] ?></td>
                            <td><?= $info['fr_total'] ?></td>
                            <td><?= grade($info['fr_total']) ?></td>
                        </tr>
                        <tr>
                            <td>P.H.E</td>
                            <td>100</td>
                            <td><?= $info['ph_cat'] ?></td>
                            <td><?= $info['ph_exam'] ?></td>
                            <td><?= $info['ph_total'] ?></td>
                            <td><?= grade($info['ph_total']) ?></td>
                        </tr>
                        <tr>
                            <td>Total Marks Obtained</td>
                            <td>1800</td>
                            <td>0</td>
                            <td>0</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="graph">
                <div class="bar" id="bar-chart">
                    <script>
                        $(document).ready(function() {
                            var t = c3.generate({
                                bindto: "#bar-chart",
                                size: {
                                    height: 450
                                },
                                color: {
                                    pattern: ["#2962FF", "#4fc3f7", "#a1aab2",
                                    "#22f2FF", "#4bd3f7", "#a1dfb2",
                                    "#296200", "#4ed307", "#b2aaad",
                                    "#2952bb", "#4aa3f7", "#c4fab2",
                                    "#2502bb", "#4cc3f7", "#3edab2",
                                    "#2212ee", "#3ac3f7", "#2ceab2"
                                    ]
                                },
                                data: {
                                    columns: [
                                        ["MAT", <?= $info['mt_total'] ?>],
                                        ["ENG", <?= $info['en_total'] ?>],
                                        ["BAS", <?= $info['bs_total'] ?>],
                                        ["SOS", <?= $info['ss_total'] ?>],
                                        ["COM", <?= $info['it_total'] ?>],
                                        ["AGR", <?= $info['ag_total'] ?>],
                                        ["IRK", <?= $info['is_total'] ?>],
                                        ["CIV", <?= $info['ci_total'] ?>],
                                        ["QUR", <?= $info['qs_total'] ?>],
                                        ["BTE", <?= $info['bt_total'] ?>],
                                        ["HOM", <?= $info['he_total'] ?>],
                                        ["BUS", <?= $info['bu_total'] ?>],
                                        ["YOR", <?= $info['yo_total'] ?>],
                                        ["CRE", <?= $info['ca_total'] ?>],
                                        ["ARA", <?= $info['al_total'] ?>],
                                        ["FRE", <?= $info['fr_total'] ?>],
                                        ["PHE", <?= $info['ph_total'] ?>],
                                    ],
                                    type: "bar"
                                },
                                axis: {
                                    rotated: !0
                                },
                                grid: {
                                    y: {
                                        show: !0
                                    }
                                }
                            });
                            var t = c3.generate({
                                bindto: "#pie-chart",
                                size: {
                                    height: 400
                                },
                                color: {
                                    pattern: ["#2962FF", "#4fc3f7", "#a1aab2",
                                    "#22f2FF", "#4bd3f7", "#a1dfb2",
                                    "#296200", "#4ed307", "#b2aaad",
                                    "#2952bb", "#4aa3f7", "#c4fab2",
                                    "#2502bb", "#4cc3f7", "#3edab2",
                                    "#2212ee", "#3ac3f7", "#2ceab2"
                                    ]
                                },
                                data: {
                                    columns: [
                                        ["MAT", <?= $info['mt_total'] ?>],
                                        ["ENG", <?= $info['en_total'] ?>],
                                        ["BAS", <?= $info['bs_total'] ?>],
                                        ["SOS", <?= $info['ss_total'] ?>],
                                        ["COM", <?= $info['it_total'] ?>],
                                        ["AGR", <?= $info['ag_total'] ?>],
                                        ["IRK", <?= $info['is_total'] ?>],
                                        ["CIV", <?= $info['ci_total'] ?>],
                                        ["QUR", <?= $info['qs_total'] ?>],
                                        ["BTE", <?= $info['bt_total'] ?>],
                                        ["HOM", <?= $info['he_total'] ?>],
                                        ["BUS", <?= $info['bu_total'] ?>],
                                        ["YOR", <?= $info['yo_total'] ?>],
                                        ["CRE", <?= $info['ca_total'] ?>],
                                        ["ARA", <?= $info['al_total'] ?>],
                                        ["FRE", <?= $info['fr_total'] ?>],
                                        ["PHE", <?= $info['ph_total'] ?>],
                                    ],
                                    type: "pie"
                                },
                                axis: {
                                    rotated: !0
                                },
                                grid: {
                                    y: {
                                        show: !0
                                    }
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <p class="comment">
            Teacher's Comment:
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur esse
                soluta sequi, nesciunt quibusdam illo assumenda velit architecto,
                recusandae eos accusantium facilis doloremque, fugit minima
                consequuntur hic magnam! Aut, rerum!</span>
        </p>

        <p class="comment">
            Principal's Comment:
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur esse
                soluta sequi, nesciunt quibusdam illo assumenda velit architecto,
                recusandae eos accusantium facilis doloremque, fugit minima
                consequuntur hic magnam! Aut, rerum!</span>
        </p>

        <div class="signature">
            <div class="gsign">
                <img src="<?= base_url('assets/img/gsign.jpg') ?>" alt="" />
                <p>Parent's/Guardian's Signature</p>
            </div>
            <div class="psign">
                <img src="<?= base_url('assets/img/psign.jpg') ?>" alt="" />
                <p>School Stamp / Signature</p>
            </div>
        </div>
    </div>
</body>

</html>