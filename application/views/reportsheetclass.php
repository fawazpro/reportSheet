<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="<?= base_url('assets/ui/dist/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/ui/assets/extra-libs/c3/c3.min.css"') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/print.css') ?>">
    <script src="<?= base_url('assets/ui/assets/libs/jquery/dist/jquery.min.js') ?>"></script>



    <title>Report Sheet</title>
</head>

<body>
    <?php
    function grade($score)
    {
        switch ($score) {
            case ($score > 70):
                return 'A1';
                break;
            case ($score > 64 && $score < 70):
                return 'B2';
                break;
            case ($score > 59 && $score < 65):
                return 'B3';
                break;
            case ($score > 49 && $score < 60):
                return 'C4';
                break;
            case ($score > 29 && $score < 50):
                return 'C5';
                break;
            case ($score > 0 && $score < 30):
                return 'F9';
                break;

            default:
                return 'N';
                break;
        }
    };
    function remark($score)
    {
        switch ($score) {
            case ($score > 70):
                return 'Excellent';
                break;
            case ($score > 64 && $score < 70):
                return 'Very Good';
                break;
            case ($score > 59 && $score < 65):
                return 'Good';
                break;
            case ($score > 49 && $score < 60):
                return 'Good';
                break;
            case ($score > 29 && $score < 50):
                return 'Fair';
                break;
            case ($score > 0 && $score < 30):
                return 'Poor';
                break;

            default:
                return 'N';
                break;
        }
    };
    function percent($score)
    {
        $percent = ($score/1700) * 100;
        return $percent;
    };
    ?>
    <?php foreach ($studs as $info) : ?>
        <div class="container" id="rssh">
            <header>
                <img src="<?= base_url('assets/img/LOGO.png') ?>" class="logo" alt="school logo" />
                <div class="name">
                    <h1>LIKEMINDS MODEL ACADEMY, ABK</h1>
                    <p>2019/2020 FIRST TERM REPORT SHEET</p>
                    <!-- <p>MOTTO: In Allah we Trust</p> -->
                </div>
            </header>

            <div class="gen-info">
                <div class="class-info">
                    <!-- <p>No of <b>Students in Class</b>: <span>3</span></p>
                <p>Class <b>average Percentage</b>: <span>61%</span></p>
                <p><b>General Grade</b>: <span>A</span></p>
                <p><b>Student Percentage</b>: <span>80%</span></p>
                <p>Date <b>School Closes</b>: <span>19th, April</span></p>
                <p>Date <b>School Resumes</b>: <span>3rd, May</span></p> -->
                    <div class="bar1" id="remarksbar<?= $info['id'] ?>">
                    </div>
                </div>
                <div class="attendance-info">
                    <h5>ATTENDANCE</h5>
                    <!-- <p>No of times <b>school opened</b>: <span>66</span></p>
                <p>No of times <b>present</b>: <span>56</span></p>
                <p>No of times <b>absent</b>: <span>10</span></p>
                <p><b><?= $info['class'] ?> </b></p> -->
                    <div class="pie2" id="attendacepie<?= $info['id'] ?>"></div>
                </div>
                <script>
                    $(document).ready(function() {
                        var t = c3.generate({
                            bindto: "#remarksbar<?= $info['id'] ?>",
                            size: {
                                height: 160
                            },
                            data: {
                                columns: [
                                    ["A1", 10],
                                    ["B2", 3],
                                    ["B3", 5],
                                    ["C4", 0],
                                    ["C5", 0],
                                    ["C6", 0],
                                ],
                                type: "donut"
                            },
                            donut: {
                                label: {
                                    format: function(value, ratio, id) {
                                        return d3.format('')(value);
                                    }
                                },
                                title: 'Performance'
                            },
                            legend: {
                                position: 'right'
                            }
                        });
                        var t = c3.generate({
                            bindto: "#attendacepie<?= $info['id'] ?>",
                            size: {
                                height: 150
                            },
                            data: {
                                columns: [
                                    ["Present-<?= $info['present'] ?>", <?= $info['present'] ?>],
                                    ["Absent-<?= $info['absent'] ?>", <?= $info['absent'] ?>],
                                ],
                                type: "pie"
                            },
                            pie: {
                                label: {
                                    format: function(value, ratio, id) {
                                        return d3.format('')(value);
                                    }
                                }
                            },
                            legend: {
                                position: 'right'
                            }
                        });
                    });
                </script>
                <div class="basic-info">
                    <img src="<?= base_url('assets/students/img/' . $info['student_photo']) ?>" alt="">
                    <p>| <span><?= $info['name'] ?></span> |</p>
                </div>
            </div>

            <div class="mid">
                <div class="report">
                    <h3>COGNITIVE ABILITY OF STUDENT</h3>
                    <table class="striped centered table">
                        <thead class="thead">
                            <tr>
                                <th>SUBJECTS</th>
                                <!-- <th>OBTAINABLE</th> -->
                                <th>C.A</th>
                                <th>EXAM</th>
                                <th>TOTAL</th>
                                <th>Class MAX</th>
                                <th>Class AVG</th>
                                <th>GRADE</th>
                                <th>REMARKS</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td>Mathematics</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['mt_cat'] ?></td>
                                <td><?= $info['mt_exam'] ?></td>
                                <td><?= $info['mt_total'] ?></td>
                                <td><?= $score['mt_max'] ?></td>
                                <td><?= $score['mt_avg'] ?></td>
                                <td><?= grade($info['mt_total']) ?></td>
                                <td><?= remark($info['mt_total']) ?></td>
                            </tr>
                            <tr>
                                <td>English Language</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['en_cat'] ?></td>
                                <td><?= $info['en_exam'] ?></td>
                                <td><?= $info['en_total'] ?></td>
                                <td><?= $score['en_max'] ?></td>
                                <td><?= $score['en_avg'] ?></td>
                                <td><?= grade($info['en_total']) ?></td>
                                <td><?= remark($info['en_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Basic Science</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['bs_cat'] ?></td>
                                <td><?= $info['bs_exam'] ?></td>
                                <td><?= $info['bs_total'] ?></td>
                                <td><?= $score['bs_max'] ?></td>
                                <td><?= $score['bs_avg'] ?></td>
                                <td><?= grade($info['bs_total']) ?></td>
                                <td><?= remark($info['bs_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Social Studies</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['ss_cat'] ?></td>
                                <td><?= $info['ss_exam'] ?></td>
                                <td><?= $info['ss_total'] ?></td>
                                <td><?= $score['ss_max'] ?></td>
                                <td><?= $score['ss_avg'] ?></td>
                                <td><?= grade($info['ss_total']) ?></td>
                                <td><?= remark($info['ss_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Computer Studies</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['it_cat'] ?></td>
                                <td><?= $info['it_exam'] ?></td>
                                <td><?= $info['it_total'] ?></td>
                                <td><?= $score['it_max'] ?></td>
                                <td><?= $score['it_avg'] ?></td>
                                <td><?= grade($info['it_total']) ?></td>
                                <td><?= remark($info['it_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Agricultural Sci.</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['ag_cat'] ?></td>
                                <td><?= $info['ag_exam'] ?></td>
                                <td><?= $info['ag_total'] ?></td>
                                <td><?= $score['ag_max'] ?></td>
                                <td><?= $score['ag_avg'] ?></td>
                                <td><?= grade($info['ag_total']) ?></td>
                                <td><?= remark($info['ag_total']) ?></td>
                            </tr>
                            <tr>
                                <td>I.R.K</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['is_cat'] ?></td>
                                <td><?= $info['is_exam'] ?></td>
                                <td><?= $info['is_total'] ?></td>
                                <td><?= $score['is_max'] ?></td>
                                <td><?= $score['is_avg'] ?></td>
                                <td><?= grade($info['is_total']) ?></td>
                                <td><?= remark($info['is_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Civic Education</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['ci_cat'] ?></td>
                                <td><?= $info['ci_exam'] ?></td>
                                <td><?= $info['ci_total'] ?></td>
                                <td><?= $score['ci_max'] ?></td>
                                <td><?= $score['ci_avg'] ?></td>
                                <td><?= grade($info['ci_total']) ?></td>
                                <td><?= remark($info['ci_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Qur'an Studies</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['qs_cat'] ?></td>
                                <td><?= $info['qs_exam'] ?></td>
                                <td><?= $info['qs_total'] ?></td>
                                <td><?= $score['qs_max'] ?></td>
                                <td><?= $score['qs_avg'] ?></td>
                                <td><?= grade($info['qs_total']) ?></td>
                                <td><?= remark($info['qs_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Basic Technology</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['bt_cat'] ?></td>
                                <td><?= $info['bt_exam'] ?></td>
                                <td><?= $info['bt_total'] ?></td>
                                <td><?= $score['bt_max'] ?></td>
                                <td><?= $score['bt_avg'] ?></td>
                                <td><?= grade($info['bt_total']) ?></td>
                                <td><?= remark($info['bt_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Home Economics</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['he_cat'] ?></td>
                                <td><?= $info['he_exam'] ?></td>
                                <td><?= $info['he_total'] ?></td>
                                <td><?= $score['he_max'] ?></td>
                                <td><?= $score['he_avg'] ?></td>
                                <td><?= grade($info['he_total']) ?></td>
                                <td><?= remark($info['he_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Business Studies</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['bu_cat'] ?></td>
                                <td><?= $info['bu_exam'] ?></td>
                                <td><?= $info['bu_total'] ?></td>
                                <td><?= $score['bu_max'] ?></td>
                                <td><?= $score['bu_avg'] ?></td>
                                <td><?= grade($info['bu_total']) ?></td>
                                <td><?= remark($info['bu_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Yoruba</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['yo_cat'] ?></td>
                                <td><?= $info['yo_exam'] ?></td>
                                <td><?= $info['yo_total'] ?></td>
                                <td><?= $score['yo_max'] ?></td>
                                <td><?= $score['yo_avg'] ?></td>
                                <td><?= grade($info['yo_total']) ?></td>
                                <td><?= remark($info['yo_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Creative Art</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['ca_cat'] ?></td>
                                <td><?= $info['ca_exam'] ?></td>
                                <td><?= $info['ca_total'] ?></td>
                                <td><?= $score['ca_max'] ?></td>
                                <td><?= $score['ca_avg'] ?></td>
                                <td><?= grade($info['ca_total']) ?></td>
                                <td><?= remark($info['ca_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Arabic Language</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['al_cat'] ?></td>
                                <td><?= $info['al_exam'] ?></td>
                                <td><?= $info['al_total'] ?></td>
                                <td><?= $score['al_max'] ?></td>
                                <td><?= $score['al_avg'] ?></td>
                                <td><?= grade($info['al_total']) ?></td>
                                <td><?= remark($info['al_total']) ?></td>
                            </tr>
                            <tr>
                                <td>French Language</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['fr_cat'] ?></td>
                                <td><?= $info['fr_exam'] ?></td>
                                <td><?= $info['fr_total'] ?></td>
                                <td><?= $score['fr_max'] ?></td>
                                <td><?= $score['fr_avg'] ?></td>
                                <td><?= grade($info['fr_total']) ?></td>
                                <td><?= remark($info['fr_total']) ?></td>
                            </tr>
                            <tr>
                                <td>P.H.E</td>
                                <!-- <td>100</td> -->
                                <td><?= $info['ph_cat'] ?></td>
                                <td><?= $info['ph_exam'] ?></td>
                                <td><?= $info['ph_total'] ?></td>
                                <td><?= $score['ph_max'] ?></td>
                                <td><?= $score['ph_avg'] ?></td>
                                <td><?= grade($info['ph_total']) ?></td>
                                <td><?= remark($info['ph_total']) ?></td>
                            </tr>
                            <tr>
                                <td>Total Marks Obtained</td>
                                <!-- <td>1800</td> -->
                                <td><?= $info['cat_total'] ?></td>
                                <td><?= $info['exam_total'] ?></td>
                                <td><?php echo ($info['cat_total'] + $info['exam_total'])  ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td><?php echo(percent($info['cat_total'] + $info['exam_total']) .'%') ?></td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="graph">
                    <div class="psycho">
                        <h3>CONDUCT OF STUDENT</h3>
                        <table class="striped centered table">
                            <thead class="thead">
                                <tr>
                                    <th>PSYCHOMOTOR</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <tr>
                                    <td>Puntuality</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Neatness</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Honesty</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Politeness</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Leadersip trait</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Speaking skills</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Writing skills</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Health</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Rel. with others</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Attentiveness</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Perseverance</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                                <tr>
                                    <td>Attitude to work</td>
                                    <td><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="">
                        <p style="text-align: center;">Score Rating</p>
                        <table class="striped centered table">
                            <thead class="thead">
                                <tr>
                                    <th>Grade</th>
                                    <th>Equivalent</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <tr>
                                    <td>A1</td>
                                    <td>100 - 70</td>
                                </tr>
                                <tr>
                                    <td>B2</td>
                                    <td>69 - 59</td>
                                </tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>



            <p class="comment">
                <b>Principal's Comment:</b>
                <span><i><?= $info['p_comment'] ?></i></span>
            </p>

            <div class="signature">
                <!-- <div class="gsign">
                    <img src="<?= base_url('assets/img/gsign.jpg') ?>" alt="" />
                    <p>Parent's/Guardian's Signature</p>
                </div> -->
                <div class="psign">
                    <!-- <img src="<?= base_url('assets/img/psign.jpg') ?>" alt="" /> -->
                    <p style="margin-top: 25px;">School Stamp / Signature</p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>