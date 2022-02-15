@extends('layout')

@section('title')
    <title>Informatie opleiding HBO-ICT op HZ</title>
@endsection

<!-- sidebar aan de linkerkant van scherm-->
@section('content')
<div id="mySidebar" class="sidebar">
    <a
        href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"
        target="_blank"
    >Onderwijs en Examen regelingen</a
    >
    <a
        href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf"
        target="_blank"
    >Uitvoeringsregeling HZ</a
    >
    <a href="https://learn.hz.nl/" target="_blank">Learn omgeving HZ</a>
    <a
        href="https://teams.microsoft.com/l/channel/19%3a827654897ab746089c081f24aff1c984%40thread.skype/General?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
        target="_blank"
    >Teams omgeving HZ</a
    >
    <a
        href="https://apps.hz.nl/angular/studievoortgang/studiestatus"
        target="_blank"
    >Studievoortgang</a
    >
    <a href="https://github.com/HZ-HBO-ICT" target="_blank"
    >Github omgeving</a
    >
    <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">×</a>
</div>

<h2>Programma Opleiding</h2>
<table>
    <tr>
        <th>Quartile</th>
        <th>Course</th>
        <th>EC</th>
        <th>Exam</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td rowspan="3">1</td>
        <td>Programme and Career Orientation</td>
        <td>2.5</td>
        <td>Assessment</td>
        <td>9.8</td>
    </tr>
    <tr>
        <td>Computer Science Basics</td>
        <td>7.5</td>
        <td>Written</td>
        <td>8.1</td>
    </tr>
    <tr>
        <td>Programming Basics</td>
        <td>5</td>
        <td>Case Study Exam</td>
        <td>8.0</td>
    </tr>
    <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Object Oriented Programming</td>
        <td rowspan="2">10</td>
        <td>Case Study</td>
        <td>7</td>
    </tr>
    <tr>
        <td>Project</td>
        <td>8.5</td>
    </tr>

    <tr>
        <td rowspan="4">3</td>
        <td>Framework Development 1</td>
        <td>5</td>
        <td>Case study</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="3">Framework Project 1</td>
        <td rowspan="3">7,5</td>
        <td>Project</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Assessment</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Report</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="3">4</td>
        <td rowspan="3">Framework Project 2</td>
        <td rowspan="3">10</td>
        <td>Portfolio</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Project</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Assessment</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Entire year</td>
        <td>Course</td>
        <td>12,5</td>
        <td>Portfolio</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="2">Ooit</td>
        <td>Personality 1</td>
        <td>1,25</td>
        <td></td>
        <td>-</td>
    </tr>
    <tr>
        <td>Personality 2</td>
        <td>1,25</td>
        <td></td>
        <td>-</td>
    </tr>
</table>
<!-- studiepunten -->
<p>25/45EC's</p>
<p>Maximaal 60EC te behalen</p>

<footer class="footer">
    <img src="resources/hzlogo.png" class="hzlogo" alt="logo-hz" />
</footer>
@endsection
