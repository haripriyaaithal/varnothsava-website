<?php

if (isset($_GET['id'])) {
    $event = $_GET['id'];

    /*
     * Array containing all event names
     * Used to check if id sent through GET method is valid or not,
     * If not valid then redirect to homepage
     */

    $events = array(
        "TePresento", "Circuitrix", "Matrix", "CADIt", "Turn-iT", "Sarvekshan", "Modula", "CrackC", "WEBBED",
        "AajaNachle", "Rockit", "Aadekhezara", "Rock-n-Roll", "Humsebadkarkaun", "SurNinaad", "Milesurmeratumhara",
        "BannadaPrapancha", "GoGrey", "WhoamI", "Cut-n-Paste", "SayClick", "KachraRe", "Vaividhyam", "Ninaad", "Orchestra",
        "Swaranjali", "BotsOnLanes", "Nidhi", "JAMIt", "NFSMostWanted", "MiniMilitia"
    );

    // Check if the received event is valid or not
    if (!in_array($event, $events)) {
        header("Location: index.php");
        exit();
    }

} else {
    // If user access this page without id redirect to homepage
    header("Location: index.php");
    exit();
}

/**
 * @param $event -> Event ID
 * @return string -> Name of the event
 */

function getName($event) {
    switch ($event) {
        case "TePresento":
            return "Te Presento";
        case "Circuitrix":
            return "Circuitrix";
        case "Matrix":
            return "Matrix";
        case "CADIt":
            return "CAD It";
        case "Turn-iT":
            return "Turn It";
        case "Sarvekshan":
            return "Sarvekshan";
        case "Modula":
            return "Modula";
        case "CrackC":
            return "Crack C";
        case "WEBBED":
            return "WEBBED";
        case "AajaNachle":
            return "Aa Ja Nachle";
        case "Rockit":
            return "Rock it";
        case "Aadekhezara":
            return "Aa Dekhe Zara";
        case "Rock-n-Roll":
            return "Rock n Roll";
        case "Humsebadkarkaun":
            return "Hum se Badkar Kaun";
        case "SurNinaad":
            return "Sur Ninaad";
        case "Milesurmeratumhara":
            return "Mile Sur Mera Tumhara";
        case "BannadaPrapancha":
            return "Bannada Prapancha";
        case "GoGrey":
            return "Go Grey";
        case "WhoamI":
            return "Who am I ?";
        case "Cut-n-Paste":
            return "Cut and Paste";
        case "SayClick":
            return "Say Click";
        case "KachraRe":
            return "Kachra Re";
        case "Vaividhyam":
            return "Vaividhyam";
        case "Ninaad":
            return "Ninaad";
        case "Orchestra":
            return "Orchestra";
        case "Swaranjali":
            return "Swaranjali";
        case "Nidhi":
            return "Nidhi";
        case "JAMIt":
            return "JAM It";
        case "BotsOnLanes":
            return "Bots On Lanes";
        case "NFSMostWanted":
            return "NFS Most Wanted";
        case "MiniMilitia":
            return "Mini Militia";
    }
    return null;
}

/**
 * @param $event -> Event ID
 * @return string -> Description of that event
 */

function getEventDescription($event) {
    switch ($event) {
        case "TePresento":
            return "(Paper Presentation)";
        case "Circuitrix":
            return "(Circuit rig up and debug)";
        case "Matrix":
            return "(MATLAB Programming)";
        case "CADIt":
            return "(CAD Modelling)";
        case "Turn-iT":
            return "(Machining operation using lathe)";
        case "Sarvekshan":
            return "(Quick Surveying)";
        case "Modula":
            return "(Civil Eng. Model making)";
        case "CrackC":
            return "(C Programming / Debugging)";
        case "WEBBED":
            return "(Web Programming)";
        case "AajaNachle":
            return "(Indian Group Dance)";
        case "Rockit":
            return "(Western Group Dance)";
        case "Aadekhezara":
            return "(Indian Solo Dance)";
        case "Rock-n-Roll":
            return "(Western Solo Dance)";
        case "Humsebadkarkaun":
            return "(Duet Dance)";
        case "SurNinaad":
            return "(Solo Singing Classical)";
        case "Milesurmeratumhara":
            return "(Duet Singing)";
        case "BannadaPrapancha":
            return "(Rangoli)";
        case "GoGrey":
            return "(Pencil Sketch)";
        case "WhoamI":
            return "(Face Painting)";
        case "Cut-n-Paste":
            return "(Collage)";
        case "SayClick":
            return "(Photography)";
        case "KachraRe":
            return "(Best out of waste)";
        case "Vaividhyam":
            return "(Variety Act)";
        case "Ninaad":
            return "(Instrumental Solo)";
        case "Orchestra":
            return "(Instrumental Group)";
        case "Swaranjali":
            return "(Anthyakshari)";
        case "Nidhi":
            return "(Treasure Hunt)";
        case "JAMIt":
            return "(Just a minute)";
        case "BotsOnLanes":
            return "(Robo race)";
    }
    return null;
}

/**
 * @param $event -> Event ID
 * @return string -> Date of that event
 */

function getEventDate($event) {
    switch ($event) {
        case "SurNinaad":
        case "Milesurmeratumhara":
        case "Aadekhezara":
        case "Humsebadkarkaun":
        case "AajaNachle":
        case "Swaranjali":
        case "BannadaPrapancha":
        case "GoGrey":
        case "SayClick":
        case "KachraRe":
        case "CADIt":
        case "Turn-iT":
        case "CrackC":
        case "WEBBED":
        case "NFSMostWanted":
        case "BotsOnLanes":
            return "08/03/2018";

        case "Ninaad":
        case "Orchestra":
        case "Rock-n-Roll":
        case "Rockit":
        case "Vaividhyam":
        case "JAMIt":
        case "WhoamI":
        case "Cut-n-Paste":
        case "Nidhi":
        case "Sarvekshan":
        case "Modula":
        case "Circuitrix":
        case "Matrix":
        case "MiniMilitia":
            return "09/03/2018";
    }
    return null;
}

/**
 * @param $event -> Event ID
 * @return string -> Time of that event
 */

function getEventTime($event) {
    switch ($event) {
        case "SurNinaad":
            return "10:00 AM";
        case "Milesurmeratumhara":
            return "11:30 AM";
        case "Aadekhezara":
            return "10:00 AM";
        case "Humsebadkarkaun":
            return "11:30 AM";
        case "AajaNachle":
            return "12:30 PM";
        case "Swaranjali":
            return "1:00 PM";
        case "BannadaPrapancha":
            return "11:00 AM";
        case "GoGrey":
            return "11:00 AM";
        case "SayClick":
            return "9:00 AM";
        case "KachraRe":
            return "2:00 PM";
        case "Ninaad":
            return "9:00 AM";
        case "Orchestra":
            return "10:00 AM";
        case "Rock-n-Roll":
            return "11:00 AM";
        case "Rockit":
            return "12:00 PM";
        case "Vaividhyam":
            return "2:00 PM";
        case "JAMIt":
            return "11:30 AM";
        case "WhoamI":
            return "10:00 AM";
        case "Cut-n-Paste":
            return "10:00 AM";
        case "Nidhi":
            return "10:00 AM";
        case "TePresento":
            return "Te Presento";
        case "Circuitrix":
            return "9:30 AM - 1:30 PM";
        case "Matrix":
            return "1:00 PM - 4:00 PM";
        case "CADIt":
            return "10:00 AM - 1:30 PM";
        case "Turn-iT":
            return "1.00 PM - 4:00 PM";
        case "Sarvekshan":
            return "10:00 PM - 1:30 PM";
        case "Modula":
            return "1:00 PM - 3:30 PM";
        case "CrackC":
            return "10:00 AM - 1:30 PM";
        case "WEBBED":
            return "1:30 PM - 4:30 PM";
        case "NFSMostWanted":
            return "10:00 AM - 1:30 PM";
        case "MiniMilitia":
            return "10:00 AM - 1:30 PM";
        case "BotsOnLanes":
            return "10:00 AM - 1:30 PM";
    }
    return null;
}

/**
 * @param $event -> Event ID
 * @return string -> Venue of that event
 */

function getEventVenue($event) {
    switch ($event) {
        case "SurNinaad":
            return "Class";
        case "Milesurmeratumhara":
            return "Class";
        case "Aadekhezara":
            return "Main Stage";
        case "Humsebadkarkaun":
            return "Main Stage";
        case "AajaNachle":
            return "Main Stage";
        case "Swaranjali":
            return "Seminar Hall 3";
        case "BannadaPrapancha":
            return "Seminar Hall 1";
        case "GoGrey":
            return "Class";
        case "SayClick":
            return "College Premises";
        case "KachraRe":
            return "Library Block";
        case "Ninaad":
            return "Main Stage";
        case "Orchestra":
            return "Main Stage";
        case "Rock-n-Roll":
            return "Main Stage";
        case "Rockit":
            return "Main Stage";
        case "Vaividhyam":
            return "Main Stage";
        case "JAMIt":
            return "Seminar Hall 3";
        case "WhoamI":
            return "Class Room";
        case "Cut-n-Paste":
            return "Class Room";
        case "Nidhi":
            return "College Premises";
        case "TePresento":
            return "";
        case "Circuitrix":
            return "EC 011, LD Lab (1st Floor EC Block)";
        case "Matrix":
            return "EC 012, DSP Lab (1st Floor EC Block)";
        case "CADIt":
            return "CAED Lab (1st Floor Admin Block)";
        case "Turn-iT":
            return "Mechanical Workshop";
        case "Sarvekshan":
            return "Civil Block";
        case "Modula":
            return "Civil Block";
        case "CrackC":
            return "LH 205 (2nd Floor Admin Block)";
        case "WEBBED":
            return "Computer Center 5 (3rd Floor Admin Block)";
        case "NFSMostWanted":
            return "CIM Lab (1st Floor Mechanical Block)";
        case "MiniMilitia":
            return "LH 202 (2nd Floor Admin Block)";
        case "BotsOnLanes":
            return "Near Library Block";
    }
    return null;
}

/**
 * @param $event -> Event ID
 * @return string -> Department of the event
 */

function getEventDepartment($event) {
    switch ($event) {
        case "Circuitrix":
        case "Matrix":
            return "Department of Electronic &amp; Communication";
        case "CADIt":
        case "Turn-iT":
            return "Department of Mechanical Engineering";
        case "Sarvekshan":
        case "Modula":
            return "Department of Civil Engineering";
        case "CrackC":
        case "WEBBED":
            return "Department of Computer Science &amp; Engineering";
        default:
            return "";
    }
}

/**
 * @param $event -> Event ID
 * @return string -> Event rules & other details
 */

function getEventDetails($event) {
    switch ($event) {
        case "TePresento":
            return "
             <p><b>TOPIC: EMERGING TRENDS IN SCIENCE AND TECHNOLOGY</b></p>
            <ul>The abstract should give a clear indication of the objective. Abstract, main text and conclusion and
            future aspects of the paper, the length of the abstract should not be more than 300 words. The title
            page of abstract must contain the name of the members, name of the college, email id and contact
            number.</ul>
                <ul><b>DESCRIPTION OF ROUNDS.</b></ul>
                <ul><b>Prelims (Online submission)</b></ul>
                <ul>• Each team has to submit online an abstract on the basis of which they
                    will be shortlisted for the presentation.
                </ul>
                <ul>
                    • Topics could be on any existing technology or an upcoming one.
                </ul>
                <ul>
                    • Word limit 300.
                </ul>
                <ul> • Last date for online submissions: 01 March 2018.</ul>
                <ul> • Submit at: <a href=\"mailto:cocurricular@sode-edu.in\">cocurricular@sode-edu.in</a></ul>

                <ul><b> FINALS (Presentation)</b></ul>
                <ul> • 8 minutes will be given to each team for presentation.</ul>
                <ul> • Interjection from judges and students for 2 minutes at the end.</ul>
                
                <ul><b>RULES</b></ul>
                <ul> • Maximum of two participants can present a paper.</ul>
                <ul> • The paper should be in IEEE format and must not exceed 6 pages.</ul>
                <ul> • Two copies of the selected paper should be brought by the team on the
                    day of event and should be submitted 30 minutes before the commencement of
                    the event.
                </ul>
                <ul> • Visual aids must be present.</ul>
                <ul> • Prizes and certifications will be provided to the winners.</ul>";
        case "Circuitrix":
            return "
<p>
                    This is an event which involves complex circuit analysis and skills to perform practically and
                    execute
                    using analog devices and components. As the name suggests the event requires knowledge about
                    circuit making on the bread board along with the knowledge of basic analog components.
                <ul><b>RULES</b></ul>
                <ul> • Elimination round where each team will be given a M.C.Q.s,.A fixed
                    number of teams with
                    best performance will be selected.
                </ul>
                <ul> • The teams will be given a circuit, participants should rig up the
                    circuit. Teams with the
                    lowest clock time will be advanced to the 3 rd round.
                </ul>
                <ul> • Third round is the Debugging Round: The teams are required to find the
                    faults in the given
                    circuit and get the output.
                </ul>
                <ul> • Further information about each round will be provided to the
                    participants on the day of
                    event.
                </ul>
                <ul> • Rules are subjected to change without prior notice.</ul>
                <ul> • The decision of the event coordinator is final.</ul>
                <ul> • The maximum of 2 participants per team.</ul>
                <ul> • No. of participating teams per college is 5.</ul>
                The teams with the maximum faults identified will be the winners.
                </p>
";
        case "Matrix":
            return "
                <ul><b>RULES</b></ul>
                <ul> • Individual event.</ul>
                <ul> • No. of participants per college is restricted to 5.
                </ul>
                <ul> • Further information about each round will be provided to the
                    participants on the day of the
                    event.
                </ul>
                <ul> • The rules are subjected to change without prior notice.
                </ul>
                <ul> • The decision of the Event Manager will be final.</ul>
                
                <ul><b>Guidelines</b></ul>
                <ul><b> Round 1</b>: It is an elimination round where each team will be given
                    MCQ’s based on matlab and Simulink, control systems, digital signal processing only.
                </ul>
                <ul><b> Round 2</b>: Writing a code for a given problem statement.</ul>
                <ul><b>Round 3</b>: Design a MATLAB or Simulink model for the given problem statement.
                </ul>";
        case "CADIt":
            return "
             <p>
                    Sketch of the model will be given, Using SOLID EDGE, participant should do the modelling of each
                    part, and assemble it.
                <ul><b>RULES</b></ul>
                <ul> • Individual event.
                </ul>
                <ul> • Duration: 2 hours 30 minutes.
                </ul>
                <ul> • Isometric view and any 2 standard views to be shown.
                </ul>
                <ul> • Further guidelines will be provided on the spot.
                </ul>
                <ul> • Number of participants per college is restricted to three..</ul>
                </p>";
        case "Turn-iT":
            return "
            <p>
                <ul><b>RULES</b></ul>
                <ul> • Paricipants should bring their own safety equipment’s like goggles, aprons and gloves
compulsorily it will not be provided by the organizers.
                </ul>
                <ul> • Individual event.
                </ul>
                <ul> • Students must be present at least 15 minutes before the commencement of the competition.
                </ul>
                <ul> • Participants must complete the model within the given time.
                </ul>
                <ul> • Necessary equipment’s and the tools will be provided by the college.
                </ul>
                <ul> • Judgement will be on the basis of dimensional accuracy, surface finish and time of
                        completion.
                </ul>
                <ul> • Judges decision will be final.
                </ul
                ><ul> • Selection will be based on first come first serve basis.
                </ul>
                </p>";
        case "Sarvekshan":
            return "
             <p>
                <ul><b>RULES</b></ul>
                <ul> • Building planes will be provided, chain, tapes and arrows which will be provided can only
be used.
                </ul>
                <ul> • 4 participants per teams.
                </ul>
                <ul> • Duration 2 hr 30 minutes.
                </ul>
                <ul> • Further guidelines will be provided on the spot.
                </ul>
                <ul> • Number of participating team per college is restricted to three.
                </ul>
                </p>
";
        case "Modula":
            return "
            <p>
                    <b>TOPIC: Structure related to Civil Engineering.</b>
                <ul><b>RULES</b></ul>
                <ul> • Team may consist of maximum 2 members.
                </ul>
                <ul> • Time given 3 hours.
                </ul>
                <ul> • Basic materials will be given.(Thermocol, glue and blades)
                </ul>
                </p>
";
        case "CrackC":
            return "
             <p>
                <ul><b>RULES</b></ul>
                <ul> • Two participants per team.
                </ul>
                <ul> • Mobile phones, books or any other programmable devices are not allowed
                    for the participants in the venue. Rough sheets will be provided.
                </ul>
                <ul> • Judges decision will be final and binding.
                </ul>
                <ul> • Number of participating teams per college is restricted to 3.
                </ul>
                <ul><b>ROUND 1 : CORRECTO QUIZES</b></ul>
                <ul> • ‘N’ questions on C, C++ and error checking will be asked.
                </ul>
                <ul> • Time allotted is 30 min.
                </ul>
                <ul> • Top ‘X’ teams will be selected to the final rounds.
                </ul>
                <ul><b>ROUND 2 : LOGIC PUNCH</b></ul>
                <ul> • Duration: 1hr 30 min.
                </ul>
                <ul> • First 30 minutes consist of quiz followed by one hour of coding.
                </ul>
                <ul> • Participants will code in C or C++ as specified on the question.
                </ul>
                <ul> • Participants will be given with computer loaded with Visual Studio.
                </ul>
                <ul> • Judging is based on positive and negative output based on the code efficiency and
                        algorithms used.
                </ul>
                </p>";
        case "WEBBED":
            return "
            <p>
                    The purpose of the competition is to produce a 4+ page website preferably dynamic based on
                    competition topic which will be announced on the day of competition.
                <ul><b>RULES</b></ul>
                <ul> • Participants can work in a team of 2 members.
                </ul>
                <ul> • Each team will be assigned a computer. Each team must do all the work
                    of creating the webpage
                    using the permitted development tool, but may make use of content (eg. images audio, video, framework
                    and libraries) found on the internet when provided with proof of documentation that permits its use.
                </ul>
                <ul> • Permitted Development Tools : Adobe DreamWeaver, Expression web, WAMP Server (if required).
                </ul>
                </p>";
        case "AajaNachle":
            return "
            <ul><b>RULES</b></ul>
                <ul> • Participants: Minimum 5, Maximum 10.
                </ul>
                <ul> • Duration: 5 + 2 minutes.
                </ul>
                <ul> • Costume: Should be decent.
                </ul>
                <ul> • Type: Classical, Semi Classical, Folk.
                </ul>
                <ul> • Music should be submitted in a CD/Pen-drive in the morning to the
                    organizers.
                </ul>
                <ul> • Criteria for Judgement: Team Work, Rapport Building, Synchronization,
                    Stage Creations,
                    Choreography, Costumes and Confidence.
                </ul>";
        case "Rockit":
            return "
            <ul><b>RULES</b></ul>
                <ul> • Participants: Minimum 5, Maximum 10.
                </ul>
                <ul> • Duration: 5 + 2 minutes.
                </ul>
                <ul> • Type: Any pure form of western dances like Hip Hop, Jazz, Filmy,
                    Freestyle etc.
                </ul>
                <ul> • Costume: Should be decent.</ul>
                <ul> • Music should be submitted in a CD/Pen-drive in the morning to the
                    organizers.
                </ul>
                <ul> • Props are allowed.</ul>
                <ul> • Criteria for Judgement: Team Work, Rapport Building, Synchronization,
                    Stage Creations,
                    Choreography, Costumes and Confidence.
                </ul>";
        case "Aadekhezara":
            return "
            <ul><b>RULES</b></ul>
                <ul> • Duration: 4 + 1 minutes (Including settings).
                </ul>
                <ul> • Costume: Should be decent.</ul>
                <ul> • Music should be submitted in a CD/Pen-drive in the morning to the
                    organizers.
                </ul>
                <ul> • No hazardous stage props allowed.</ul>
                <ul> • Criteria for Judgement: Technique, Grace, Confidence, Expression,
                    Stage Presence.
                </ul>
";
        case "Rock-n-Roll":
            return "
            <ul><b>RULES</b></ul>
                <ul> • Duration: 4 + 1 minutes (Including settings).
                </ul>
                <ul> • Costume: Should be decent.</ul>
                <ul> • Music should be submitted in a CD/Pen-drive in the morning to the
                    organizers.
                </ul>
                <ul> • No hazardous stage props allowed.</ul>
                <ul> • Criteria for Judgement: Technique, Grace, Confidence, Expression,
                    Stage Presence.
                </ul>";
        case "Humsebadkarkaun":
            return "
            <ul><b>RULES</b></ul>
                <ul> • Duration: 4 + 1 minutes.
                </ul>
                <ul> • Combination of Participants: Male &amp; Male/ Male &amp; Female/
                    Female &amp; Female.
                </ul>
                <ul> • Type: Any dance style.</ul>
                <ul> • Costume: Should be decent.</ul>
                <ul> • Music should be submitted in a CD/Pen-drive in the morning to the
                    organizers.
                </ul>
                <ul> • Props are allowed.</ul>
                ";
        case "SurNinaad":
            return "
            <ul><b>RULES</b></ul>
                <ul> • Duration: 5 + 1 minutes (including settings).</ul>
                <ul> • The rendition can be only classical.</ul>
                <ul> • Musical Instruments or Karaoke is allowed but will not be considered
                    as judgement criterion.
                </ul>
                <ul> • Participants are allowed to bring maximum 2 instruments.</ul>
                <ul> • Criteria for Judgement: Shruthi, Swara, Tala, Raga, Laya, Selection of
                    Song and general impression.
                </ul>
                ";
        case "Milesurmeratumhara":
            return "
             <ul><b>RULES</b></ul>
                <ul> • Duration: 3 + 1 minutes.</ul>
                <ul> • Combination of Participants: Male &amp; Male/ Male &amp; Female/
                    Female &amp; Female.
                </ul>
                <ul> • Karaoke is allowed.</ul>
                <ul> • Criteria for Judgement: Shruthi, Swara, Tala, Raga, Laya, Selection of
                    Song and general impression.
                </ul>
                ";
        case "BannadaPrapancha":
            return "<ul><b>RULES</b></ul>
                <ul> • Duration: 2 Hours.</ul>
                <ul> • Participants should bring their own materials.</ul>
                <ul> • No usage of ready-made designs and/or chalks &amp; other properties
                    (scale, thread, pencil, strainer, stick).
                </ul>
                <ul> • Particiants shall have to prepare a Rangoli within the space
                    provided.
                </ul>
                <ul> • Judgement Criteria: Color combination, Area Covered, Neatness,
                    Decoration, Completion.
                </ul>";
        case "GoGrey":
            return "<ul><b>RULES</b></ul>
                <ul> • Duration: 1 Hours.</ul>
                <ul> • Participants can use only pencil, eraser, cotton.</ul>
                <ul> • No microstrip pencil. Geometrical instruments like scales are allowed.
                </ul>
                <ul> • The topic is given on the spot.
                </ul>
                <ul> • Tracing is prohibited.
                </ul>
                ";
        case "WhoamI":
            return "<ul><b>RULES</b></ul>
                <ul> • Duration: 2 Hours.</ul>
                <ul> • Topic will be giveng on the spot.</ul>
                <ul> • Painting can be done using oil/water/poster colors.
                </ul>
                <ul> • Participants should bring their own materials.
                </ul>
                <ul> • Judgement Criteria: Creativity, Color Combination, Neatness, Theme,
                    Completion.
                </ul>
                ";
        case "Cut-n-Paste":
            return "<ul><b>RULES</b></ul>
                <ul> • Duration: 1 Hours.</ul>
                <ul> • Participants are required to make a unified artistic image on a given
                    topic/theme by sticking together pieces of paper of pictures.
                </ul>
                <ul> • Required material should be brought by participants (glue, cello tape,
                    newspaper, magazines etc).
                </ul>
                <ul> • Two participants per team.</ul>
                ";
        case "SayClick":
            return "
             <ul><b>RULES</b></ul>
                <ul> • All photos taken should be submitted before 1:00 PM on the same day.
                </ul>
                <ul> • The photos should be original. No editing is allowed.
                </ul>
                <ul> • Obscene or offensive photos will be rejected.
                </ul>
                <ul> • Participants should bring their own DSLR cameras.
                </ul>
                <ul> • Specific instructions will be given on the spot.
                </ul>";
        case "KachraRe":
            return "
             <ul><b>RULES</b></ul>
                <ul> • Three members per team.</ul>
                <ul> • Only waste materials in the campus can be used for the purpose.
                </ul>
                <ul> • Other than waste materials glue and other adhesives, pins, colors can
                    be used.
                </ul>
                <ul> • Judges have right to disqualify any artwork if major material used is
                    not a waste material.
                </ul>
                <ul> • Participants are not allowed to bring any pre-made structure. All the
                    work has to be finished within prescribed time limit.
                </ul>
                <ul> • Duration: 2 Hours.
                </ul>
                ";
        case "Vaividhyam":
            return "
            <ul><b>RULES</b></ul>
                <ul> • Participants: Minimum 10, Maximum 16.</ul>
                <ul> • Duration: 13 + 2 minutes.
                </ul>
                <ul> • Costume: Should be decent.
                </ul>
                <ul> • There should be atleast one solo act and one group act.
                </ul>
                <ul> • Music should be submitted in a CD/Pen-drive in the morning to the
                    organizers.
                </ul>
                <ul> • Criteria for Judgement: Team Work, Stage Creations, Creativity,
                    Costumes and Confidence.
                </ul>
";
        case "Ninaad":
            return "
             <ul><b>RULES</b></ul>
                <ul> • Duration: 5 + 1 minutes (including settings).</ul>
                <ul> • Instrumentation can be Indian or western.</ul>
                <ul> • Type: Percussion or Non - Percussion.</ul>
                <ul> • Criteria for Judgement: Shruthi, Swara, Laya, Tala, Raga
                    and general impression.
                </ul>
                ";
        case "Orchestra":
            return "
             <ul><b>RULES</b></ul>
                <ul> • Participants: Minimum 3 Maximum 6.</ul>
                <ul> • Duration: 9+1 minutes including settings.</ul>
                <ul> • Instrumentation can be indian or western.</ul>
                <ul> • Type: Percussion or Non - Percussion.</ul>
                <ul> • Criteria for Judgement: Shruthi, Swara, Laya, Tala, Raga
                    and general impression.
                </ul>
                ";
        case "Swaranjali":
            return "
                <ul><b>RULES</b></ul>
                <ul> • Three members per team.</ul>
                <ul> • First round prelims (written).</ul>
                <ul> • 5 Teams will be selected in first round.</ul>
                <ul> • Number of rounds and additional rules for the event will be announced
                    at the venue.
                </ul>
                ";
        case "Nidhi":
            return "
             <p>Using a series of clues participants have to find a hidden treasure.</p>
                <ul><b>RULES</b></ul>
                <ul> • 3 make a team.
                </ul>
                <ul> • Prelims will be conducted, if there are too many teams.
                </ul>
                <ul> • The event will go on for 2-3 hours.</ul>
                <ul> • The event orgamizers decision will be final and binding.</ul>
                ";
        case "JAMIt":
            return "<ul><b>RULES</b></ul>
                <ul> • The contestants are contested against the opponents on stage. The
                    number of rounds will be decided by the response gathered.
                </ul>
                <ul> • The contestants will have to speak on a topic for about 1 minute. The
                    topics are to be decided by the JAM master.
                </ul>
                <ul> • Valid objections whuch will be mentioned by the JAM master on the spot
                    can be raised.
                </ul>
                <ul> • Speaking for 10 seconds will be rewarded 1 point,<br> +1 point for
                    valid
                    objection,<br> -1 point for invalid objection.<br> 5 points to the contesting holding floor at the
                    end of 1
                    minute.
                </ul>";
        case "BotsOnLanes":
            return "
            <ul><b>OBJECTIVE</b></ul>
                 <p>To make a manually controlled machine that completes an obstacle track in
                    minimum possible time.</p>
                <ul><b>TRACK ARENA</b></ul>
                <ul> • Track will have maximum width of 30 cms.
                </ul>
                <ul> • The hurdles present in the track may be in the form of
                <ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Sand and gravel.</ul>
                </ul>
                <ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Oils and greases.</ul>
                </ul>
                <ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Bridges and inclines surfaces.</ul>
                </ul>
                <ul style='text-align: left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Crystal balls and cotton wood and iron pallets etc.</ul>
                </ul>
                
                <ul><b> DIMENSIONS AND POWER SUPPLY</b>
                </ul>
                <ul> • Machine must fit into a box of dimension 25x25 cm (lxb).
                </ul>
                <ul> • Maximum voltage supply at any case must not exceed 24 volts dc.
                </ul>
                <ul> • The organizers will provide a standard 230 volts 50 Hz A.C power supply. Any other
                        extension cords, adapters, eliminators etc must be arranged by the participants
                        themselves.
                </ul>
                <ul> • The maximum weight of the bot allowed is 5kg.
                </ul>
                <ul> <b>GENERAL RULES OF THE EVENT</b>
                </ul>
                <ul> • The race will be conducted on timing criterion i.e the team to complete the whole track in
the minimum possible time will be the winner.
                </ul>
                <ul> • The time measured by the organisers will be final and will be used for scoring the teams.The
time measured by any contestant by any other means is not acceptable for scoring.
                </ul>
                <ul> •The team can consist of maximum of 4 participants.
                </ul>
                <ul> • In case of any disputes, the organiser’s decision will be final.
                </ul>
                <ul> • Any team not ready at the time specified will be disqualified from the competition
automatically.
                </ul>
                <ul> • Judges decision will be final and will binding on all, no arguments will be entertained.
                </ul>
                <ul> • Wired, wireless control is allowed.
                </ul>
                <ul>• The Robo car must not be made up of Ready made Kits, lego parts etc.
                </ul>
                <ul> • Robo should not be touched in middle of race.
                </ul>
                <ul> • Any damage to arena will lead to penalty or disqualification.
                </ul>" .
                "";
        case "NFSMostWanted":
            return " <ul> • Game Version: Need For Speed : Most Wanted.</ul>
                <ul> • Any discomfort regarding controls should be informed first.</ul>
                <ul> • The game has to be played only on keyboard. Any other controllers are
                    not permitted.
                </ul>
                 <ul> • Individual event.
                </ul>
                <ul> • Tournament format : 4 or 6 players play at a time.
                </ul>
                <ul> • Game type will be decided by the organisers at the tournament.</ul>
                <ul> • At the end of each match the players must maintain the final screen
                    and receive confirmation from a referee.
                </ul>";
        case "MiniMilitia":
            return "<ul> • Game version will be provided to the participants through share it by the organizing team.</ul>
                <ul> • 4 make a team.</ul>
                <ul> • Tournament format: 4 vs 4 : best two out of 3 matches.</ul>
                <ul> • Limited amount of time will be given to configure.</ul>
                <ul> • Further information will be announced before the start of each match.
                </ul>
                <ul> • Not more than 3 teams per college.</ul>";
    }
    return null;
}

/**
 * @param $event -> Event ID
 * @return string -> Details of coodinators
 */

function getEventCoordinators($event) {
    switch ($event) {
        case "TePresento":
            return "Te Presento";
        case "Circuitrix":
            return "
                       <p><b>Student Coordinator</b></p>
                                <p>Yashasvi Shenoy<br><a href=\"tel:+918861027757\">(+91 88610 27757)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Kusuma Prabhu<br><a href=\"tel:+919739319656\">(+91 97393 19656)</a></p>";
        case "Matrix":
            return " <p><b>Student Coordinator</b></p>
                                <p>Raksha Poojary<br><a href=\"tel:+917760242561\">(+91 77602 42561)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Kusuma Prabhu<br><a href=\"tel:+919739319656\">(+91 97393 19656)</a></p>";
        case "CADIt":
            return "  <p><b>Student Coordinator</b></p>
                                <p>Nishanth V<br><a href=\"tel:+919008926844\">(+91 90089 26844)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Pavan Kumar<br><a href=\"tel:+919449700900\">(+91 94497 00900)</a></p>";
        case "Turn-iT":
            return "<p><b>Student Coordinator</b></p>
                                <p>Akshay Kammar<br><a href=\"tel:+918050143901\">(+91 80501 43901)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Pavan Kumar<br><a href=\"tel:+919449700900\">(+91 94497 00900)</a></p>";
        case "Sarvekshan":
            return " <p><b>Student Coordinator</b></p>
                                <p>Sanjay J Acharya<br><a href=\"tel:+919482836878\">(+91 94828 36878)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Vignesh Shenoy<br><a href=\"tel:+919880918674\">(+91 98809 18674)</a></p>";
        case "Modula":
            return "<p><b>Student Coordinator</b></p>
                                <p>Sanjay J Acharya<br><a href=\"tel:+919482836878\">(+91 94828 36878)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Nishitha Dsouza<br><a href=\"tel:+919916823370\">(+91 99168 23370)</a></p>";
        case "CrackC":
            return "<p><b>Student Coordinator</b></p>
                                <p>Karthik Bhat<br><a href=\"tel:+919845543624\">(+91 98455 43624)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ramya Shetty<br><a href=\"tel:+919620488077\">(+91 96204 88077)</a></p>";
        case "WEBBED":
            return "<p><b>Student Coordinator</b></p>
                                <p>Prajna U Nayak<br><a href=\"tel:+918495833233\">(+91 84958 33233)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Srinivasa Naik<br><a href=\"tel:+919900277682\">(+91 99002 77682)</a></p>";
        case "AajaNachle":
            return " <p><b>Student Coordinator</b></p>
                                <p>Krithika Pai<br><a href=\"tel:+919482862307\">(+91 94828 62307)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Sneha N S<br><a href=\"tel:+919535618678\">(+91 95356 18678)</a></p>";
        case "Rockit":
            return " <p><b>Student Coordinator</b></p>
                                <p>Pragathi Nayak<br><a href=\"tel:+919980903596\">(+91 99809 03596)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Sneha N S<br><a href=\"tel:+919535618678\">(+91 95356 18678)</a></p>";
        case "Aadekhezara":
            return " <p><b>Student Coordinator</b></p>
                                <p>Chaithra<br><a href=\"tel:+919611547574\">(+91 96115 47574)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Rashmi K R<br><a href=\"tel:+918762549256\">(+91 87625 49256)</a></p>";
        case "Rock-n-Roll":
            return " <p><b>Student Coordinator</b></p>
                                <p>Ashwini<br><a href=\"tel:+919902430010\">(+91 99024 30010)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Rashmi K R<br><a href=\"tel:+918762549256\">(+91 87625 49256)</a></p>";
        case "Humsebadkarkaun":
            return "<p><b>Student Coordinator</b></p>
                                <p>Sushmitha R<br><a href=\"tel:+917353873474\">(+91 73538 73474)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Rashmi K R<br><a href=\"tel:+918762549256\">(+91 87625 49256)</a></p>";
        case "SurNinaad":
            return "<p><b>Student Coordinator</b></p>
                                <p>Ayisha Shetty<br><a href=\"tel:+919449176930\">(+91 94491 76930)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Mr. Ananth Mohan Mallya<br><a href=\"tel:+919964379957\">(+91 99643 79957)</a></p>";
        case "Milesurmeratumhara":
            return "<p><b>Student Coordinator</b></p>
                                <p>Supritha Poojary<br><a href=\"tel:+917411518685\">(+91 74115 18685)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Mr. Ananth Mohan Mallya<br><a href=\"tel:+919964379957\">(+91 99643 79957)</a></p>";
        case "BannadaPrapancha":
            return "<p><b>Student Coordinator</b></p>
                                <p>Bindiya U<br><a href=\"tel:+919481245792\">(+91 94812 45792)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Vrunda Adkar<br><a href=\"tel:+919743079926\">(+91 97430 79926)</a></p>";
        case "GoGrey":
            return "<p><b>Student Coordinator</b></p>
                                <p>Rohit Prabhu<br><a href=\"tel:+919686561793\">(+91 96865 61793)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Vrunda Adkar<br><a href=\"tel:+919743079926\">(+91 97430 79926)</a></p>";
        case "WhoamI":
            return "<p><b>Student Coordinator</b></p>
                                <p>Praveen Badiger<br><a href=\"tel:+919481394829\">(+91 94813 94829)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Vrunda Adkar<br><a href=\"tel:+919743079926\">(+91 97430 79926)</a></p>";
        case "Cut-n-Paste":
            return "<p><b>Student Coordinator</b></p>
                                <p>Shreya S Anchan<br><a href=\"tel:+918105822781\">(+91 81058 22781)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Nisha Reena Nazarath<br><a href=\"tel:+919164370482\">(+91 91643 70482)</a></p>";
        case "SayClick":
            return "<p><b>Student Coordinator</b></p>
                                <p>Phebe Ann Samuel<br><a href=\"tel:+918792827970\">(+91 87928 27970)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Nisha Reena Nazarath<br><a href=\"tel:+919164370482\">(+91 91643 70482)</a></p>";
        case "KachraRe":
            return "<p><b>Student Coordinator</b></p>
                                <p>Arun HR<br><a href=\"tel:+919480734670\">(+91 94807 34670)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ms. Nisha Reena Nazarath<br><a href=\"tel:+919164370482\">(+91 91643 70482)</a></p>";
        case "Vaividhyam":
            return " <p><b>Student Coordinator</b></p>
                                <p>Abhinav Karaba<br><a href=\"tel:+919483927493\">(+91 94839 27493)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Mr. Ramachandra B N<br><a href=\"tel:+918197779585\">(+91 81977 79585)</a></p>";
        case "Ninaad":
            return "<p><b>Student Coordinator</b></p>
                                <p>Sahana Kidiyoor<br><a href=\"tel:+919164555994\">(+91 91645 55994)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Mr. Ramachandra B N<br><a href=\"tel:+918197779585\">(+91 81977 79585)</a></p>";
        case "Orchestra":
            return "<p><b>Student Coordinator</b></p>
                                <p>Lasya K Rao<br><a href=\"tel:+917259285940\">(+91 72592 85940)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Mr. Ramachandra B N<br><a href=\"tel:+918197779585\">(+91 81977 79585)</a></p>";
        case "Swaranjali":
            return "<p><b>Student Coordinator</b></p>
                                <p>Sunethra<br><a href=\"tel:+918105893377\">(+91 81058 93377)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Mr. Ananth Mohan Mallya<br><a href=\"tel:+919964379957\">(+91 99643 79957)</a></p>";
        case "Nidhi":
            return "<p><b>Student Coordinator</b></p>
                                <p>Meghana Prabhu<br><a href=\"tel:+919743814496\">(+91 97438 14496)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Mr. Deviprakash<br><a href=\"tel:+918105030200\">(+91 81050 30200)</a></p>";
        case "JAMIt":
            return "<p><b>Student Coordinator</b></p>
                                <p>Daryl Aranha<br><a href=\"tel:+919632431244\">(+91 96324 31244)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Mr. Deviprakash<br><a href=\"tel:+918105030200\">(+91 81050 30200)</a></p>";
        case "BotsOnLanes":
            return "<p><b>Student Coordinator</b></p>
                                <p>Kishore Poojary<br><a href=\"tel:+918884383249\">(+91 88843 83249)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Raviprabha<br><a href=\"tel:+919844990322\">(+91 98449 90322)</a></p>";
        case "NFSMostWanted":
            return " <p><b>Student Coordinator</b></p>
                                <p>Sharukh Sameer<br><a href=\"tel:+919738663625\">(+91 97386 63625)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ranjith Bhat<br><a href=\"tel:+919742239324\">(+91 97422 39324)</a></p>";
        case "MiniMilitia":
            return " <p><b>Student Coordinator</b></p>
                                <p>Glanis Joyal Monterio<br><a href=\"tel:+919480986855\">(+91 94809 86855)</a></p>
                                <p><b>Faculty Coordinator</b></p>
                                <p>Ranjith Bhat<br><a href=\"tel:+919742239324\">(+91 97422 39324)</a></p>";
    }
    return null;
}

?>


<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" type="image/png" href="http://sode-edu.in/wp-content/themes/sodeCollege2015/favicon.png">
    <title><?php echo getName($event); ?> - Varnothsava 18</title>
    <meta name="theme-color" content="#795548"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description"
          content="Varnothsava, an annual intercollegiate cultural and technical fest organised by SMVITM"/>
    <meta name="keywords"
          content="smvitm fest, varnothsava, varnothsava18, bantakal fest, Sri madhwa vadiraaja college fest"/>
</head>

<style type="text/css">
	.navbar-fixed {
        z-index: 9999;
    }

    .nav-text {
        padding-top: 25%;
    }

    blockquote {
        border-left-color: #795548;
        margin-bottom: 5px;
    }

    .container {
        margin: 0 auto;
        max-width: 1280px;
        width: 75%;
    }

    @media only screen and (max-width: 480px) {
        .container {
            width: 90%;
        }
    }

    ul {
        text-align: justify;
    }

    p {
        text-align: justify;
    }

    #map {
        height: 250px;
        width: 100%;
    }

    .brand-logo {
        width: fit-content;
    }

    .shadow {
        text-shadow: 2px 2px black;
    }

    .tabs-content.carousel .carousel-item {
        height: auto;
    }

    .tabs .tab a {
        color: rgba(0, 0, 0, 0.7);
    }

    .tabs .tab a:hover, .tabs .tab a.active {
        color: #000000;
        font-weight: bolder;
    }

    .tabs .indicator {
        background-color: #000000;
    }
</style>

<body background="images/page-bg.jpg">

<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large brown waves-effect waves-light z-depth-5" href="#Home">
        <i class="large material-icons">keyboard_arrow_up</i>
    </a>
</div>

<div class="scrollspy" id="Home">

</div>

<div class="navbar-fixed">
    <nav>
        <ul id="te" class="dropdown-content">
            <li><a href="#" class="grey-text disabled">Technical Events</a></li>
            <li><a href="events.php?id=TePresento" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Paper Presentation)">Te Presento</a></li>
            <li><a href="events.php?id=Circuitrix" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Circuit rig up and debug)">Circuitrix</a></li>
            <li><a href="events.php?id=Matrix" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(MATLAB Programming)">Matrix</a></li>
            <li><a href="events.php?id=CADIt" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(CAD Modelling)">CAD It</a></li>
            <li><a href="events.php?id=Turn-iT" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Machining operation using lathe)">Turn It</a></li>
            <li><a href="events.php?id=Sarvekshan" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Quick Surveying)">Sarvekshan</a></li>
            <li><a href="events.php?id=Modula" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Civil Eng. Model making)">Modula</a></li>
            <li><a href="events.php?id=CrackC" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(C Programming / Debugging)">Crack C</a></li>
            <li><a href="events.php?id=WEBBED" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Web Programming)">WEBBED</a></li>
        </ul>

        <ul id="ce" class="dropdown-content">
            <li><a href="#" class="grey-text disabled">Cultural Events</a></li>
            <li><a href="events.php?id=AajaNachle" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Indian Group Dance)">Aa Ja Nachle</a></li>
            <li><a href="events.php?id=Rockit" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Western Group Dance)">Rock It</a></li>
            <li><a href="events.php?id=Aadekhezara" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Indian solo dance)">Aa Dekhe Zara</a></li>
            <li><a href="events.php?id=Rock-n-Roll" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Western solo dance)">Rock n Roll</a></li>
            <li><a href="events.php?id=Humsebadkarkaun" class="black-text tooltipped" data-position="right"
                   data-delay="50" data-tooltip="(Duet dance)">Hum se Badkar Kaun</a></li>
            <li><a href="events.php?id=SurNinaad" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Solo singing Classical)">Sur Ninaad</a></li>
            <li><a href="events.php?id=Milesurmeratumhara" class="black-text tooltipped" data-position="right"
                   data-delay="50" data-tooltip="(Duet singing - Filmi)">Mile Sur Mera Tumhara</a></li>
            <li><a href="events.php?id=BannadaPrapancha" class="black-text tooltipped" data-position="right"
                   data-delay="50" data-tooltip="(Rangoli)">Bannada Prapancha</a></li>
            <li><a href="events.php?id=GoGrey" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Pencil Sketch)">Go Grey</a></li>
            <li><a href="events.php?id=WhoamI" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Face Painting)">Who am I?</a></li>
            <li><a href="events.php?id=Cut-n-Paste" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Collage)">Cut and Paste</a></li>
            <li><a href="events.php?id=SayClick" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Photography)">Say Click</a></li>
            <li><a href="events.php?id=KachraRe" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Best out of waste)">Kachra Re</a></li>
            <li><a href="events.php?id=Vaividhyam" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Variety Act)">Vaividhyam</a></li>
            <li><a href="events.php?id=Ninaad" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Instrumental-solo)">Ninaad</a></li>
            <li><a href="events.php?id=Orchestra" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Instrumental-group band)">Orchestra</a></li>
            <li><a href="events.php?id=Swaranjali" class="black-text tooltipped" data-position="right" data-delay="50"
                   data-tooltip="(Anthyakshari)">Swaranjali</a></li>
        </ul>

        <ul id="general" class="dropdown-content">
            <li><a href="#" class="grey-text disabled">General Events</a></li>
            <li><a href="events.php?id=BotsOnLanes" class="black-text tooltipped" data-position="left" data-delay="50"
                data-tooltip="(Robo Race)">Bots On Lanes</a></li>
            <li><a href="events.php?id=Nidhi" class="black-text tooltipped" data-position="left" data-delay="50"
                   data-tooltip="(Treasure Hunt)">Nidhi</a></li>
            <li><a href="events.php?id=JAMIt" class="black-text tooltipped" data-position="left" data-delay="50"
                   data-tooltip="(Just a minute)">JAM It</a></li>
        </ul>

        <ul id="game" class="dropdown-content">
            <li><a href="#" class="grey-text disabled">Gaming Events</a></li>
            <li><a href="events.php?id=NFSMostWanted" class="black-text">NFS Most Wanted</a></li>
            <li><a href="events.php?id=MiniMilitia" class="black-text">Mini Militia</a></li>
        </ul>

        <div class="nav-wrapper brown">
            <a href="#!" class="brand-logo center" id="title" onclick="show()"><?php echo getName($event); ?></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a class="dropdown-button waves-effect waves-light" data-activates="general" href="#">General
                        Events</a>
                </li>
                <li>
                    <a class="dropdown-button waves-effect waves-light" data-activates="game" href="#">Gaming Events</a>
                </li>
                <li>
                    <a class="waves-effect waves-light tooltipped" href="https://goo.gl/4uqFTX" data-position="bottom" data-delay="50"
                       data-tooltip="Register Now!">Registration</a>
                </li>

            </ul>
            <ul class="left hide-on-med-and-down waves-effect waves-light">
                <a href="index.php"><i class="material-icons">home</i></a>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li>
                    <a class="dropdown-button waves-effect waves-light" data-activates="te" href="#">Technical
                        Events</a>
                </li>
                <li>
                    <a class="dropdown-button waves-effect waves-light" data-activates="ce" href="#">&nbsp;&nbsp;Cultural
                        Events&nbsp;&nbsp;</a>
                </li>
            </ul>
            <a href="#!" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="side-nav" id="mobile-demo">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="images/bg.jpg" alt="Background">
                        </div>
                        <img class="responsive-img nav-text" src="images/var.png" alt="Varnothsava Text">
                    </div>
                </li>
                <li>
                    <a href="index.php"><i class="material-icons">home</i> Home</a>
                </li>
                <li>
                    <a href="https://goo.gl/4uqFTX"><i class="material-icons">create</i>
                        Registration</a>
                </li>
                <li class="divider"></li>
                <li><a class="subheader">Events</a></li>

                <ul class="collapsible collapsible-accordion grey lighten-3">
                    <li>
                        <a class="collapsible-header">Technical Events<i
                                    class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey lighten-4">
                            <ul>
                                <li><a href="events.php?id=TePresento">Te Presento</a></li>
                                <li><a href="events.php?id=Circuitrix">Circuitrix</a></li>
                                <li><a href="events.php?id=Matrix">Matrix</a></li>
                                <li><a href="events.php?id=CADIt">CAD It</a></li>
                                <li><a href="events.php?id=Turn-iT">Turn It</a></li>
                                <li><a href="events.php?id=Sarvekshan">Sarvekshan</a></li>
                                <li><a href="events.php?id=Modula">Modula</a></li>
                                <li><a href="events.php?id=CrackC">Crack C</a></li>
                                <li><a href="events.php?id=WEBBED">WEBBED</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="collapsible-header">Cultural Events<i class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey lighten-4">
                            <ul>
                                <li><a href="events.php?id=AajaNachle">Aa Ja Nachle</a></li>
                                <li><a href="events.php?id=Rockit">Rock It</a></li>
                                <li><a href="events.php?id=Aadekhezara">Aa Dekhe Zara</a></li>
                                <li><a href="events.php?id=Rock-n-Roll">Rock n Roll</a></li>
                                <li><a href="events.php?id=Humsebadkarkaun">Hum se Badkar Kaun</a></li>
                                <li><a href="events.php?id=SurNinaad">Sur Ninaad</a></li>
                                <li><a href="events.php?id=Milesurmeratumhara">Mile Sur Mera Tumhara</a></li>
                                <li><a href="events.php?id=BannadaPrapancha">Bannada Prapancha</a></li>
                                <li><a href="events.php?id=GoGrey">Go Grey</a></li>
                                <li><a href="events.php?id=WhoamI">Who am I?</a></li>
                                <li><a href="events.php?id=Cut-n-Paste">Cut and Paste</a></li>
                                <li><a href="events.php?id=SayClick">Say Click</a></li>
                                <li><a href="events.php?id=KachraRe">Kachra Re</a></li>
                                <li><a href="events.php?id=Vaividhyam">Vaividhyam</a></li>
                                <li><a href="events.php?id=Ninaad">Ninaad</a></li>
                                <li><a href="events.php?id=Orchestra">Orchestra</a></li>
                                <li><a href="events.php?id=Swaranjali">Swaranjali</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="collapsible-header">General Events<i class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey lighten-4">
                            <ul>
                                <li><a href="events.php?id=BotsOnLanes">Bots On Lanes</a></li>
                                <li><a href="events.php?id=Nidhi">Nidhi</a></li>
                                <li><a href="events.php?id=JAMIt">JAM It</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="collapsible-header">Gaming Events<i
                                    class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body grey lighten-4">
                            <ul>
                                <li><a href="events.php?id=NFSMostWanted">NFS Most Wanted</a></li>
                                <li><a href="events.php?id=MiniMilitia">Mini Militia</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>
</div>

<?php

if ($event == "TePresento") {
    ?>
    <p></p>
    <div class="row">
        <div class="col s12">
            <ul class="tabs swipeable">
                <li class="tab col s3"><a href="#cv">Civil</a></li>
                <li class="tab col s3"><a href="#me">Mech</a></li>
                <li class="tab col s3 "><a href="#ec">E &amp; C</a></li>
                <li class="tab col s3"><a href="#cs">CS &amp; E</a></li>
            </ul>
            <div id="cv" class="col s12 white">
                <div class="row">
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">date_range</i>Date: 09/03/2018
                        </blockquote>
                    </div>
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">access_time</i>Time: 10.30 AM - 12:30 PM
                        </blockquote>
                    </div>
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">location_on</i>Venue: CV 101 (1st Floor Civil Block)
                        </blockquote>
                    </div>
                </div>
            </div>
            <div id="me" class="col s12 white">
                <div class="row">
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">date_range</i>Date: 08/03/2018
                        </blockquote>
                    </div>
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">access_time</i>Time: 10.30 AM - 12:30 PM
                        </blockquote>
                    </div>
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">location_on</i>Venue: ME 001 (Ground Floor Mechanical Block)
                        </blockquote>
                    </div>
                </div>
            </div>
            <div id="ec" class="col s12 white">
                <div class="row">
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">date_range</i>Date: 09/03/2018
                        </blockquote>
                    </div>
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">access_time</i>Time: 10.30 AM - 12:30 PM
                        </blockquote>
                    </div>
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">location_on</i>Venue: EC 010 (Ground Floor EC Block)
                        </blockquote>
                    </div>
                </div>
            </div>
            <div id="cs" class="col s12 white">
                <div class="row">
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">date_range</i>Date: 08/03/2018
                        </blockquote>
                    </div>
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">access_time</i>Time: 10.30 AM - 12:30 PM
                        </blockquote>
                    </div>
                    <div class="col s12 m4">
                        <blockquote class="collapsible-header z-depth-5">
                            <i class="material-icons tiny">location_on</i>Venue: LH 204 (2nd Floor Admin Block)
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m3 l3">
                <div class="card z-depth-5">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">Event Name</span>
                        <p></p>
                        <p><b>Te Presento</b></p>
                        <p style="text-align: left">(Paper Presentation)<br></p>
                    </div>
                </div>
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">Coordinators - Civil</span>
                        <p><b>Student Coordinator</b></p>
                        <p>Megha Kotian<br><a href="tel:+917026202155"> (+91 70262 02155)</a></p>
                        <p><b>Faculty Coordinator</b></p>
                        <p>Nishitha Dsouza<br><a href="tel:+919916823370">(+91 99168 23370)</a></p>
                    </div>
                </div>
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">Coordinators - Mech</span>
                        <p><b>Student Coordinator</b></p>
                        <p>Adrutha Maiyya<br><a href="tel:+919480713892">(+91 94807 13892)</a></p>
                        <p><b>Faculty Coordinator</b></p>
                        <p>Pavan Kumar<br><a href="tel:+919449700900">(+91 94497 00900)</a></p>
                    </div>
                </div>
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">Coordinators - EC</span>
                        <p><b>Student Coordinator</b></p>
                        <p>Srinidhi<br><a href="tel:+918861939472">(+91 88619 39472)</a></p>
                        <p><b>Faculty Coordinator</b></p>
                        <p>Kusuma Prabhu<br><a href="tel:+919739319656">(+91 97393 19656)</a></p>
                    </div>
                </div>
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">Coordinators - CSE</span>
                        <p><b>Student Coordinator</b></p>
                        <p>Adithi Hegde<br><a href="tel:+919113223573">(+91 91132 23573)</a></p>
                        <p><b>Faculty Coordinator</b></p>
                        <p>Ramya Shetty<br><a href="tel:+919620488077">(+91 96204 88077)</a></p>
                    </div>
                </div>
            </div>

            <div class="col s12 m9 l9">
                <div class="card z-depth-5">
                    <div class="card-content">
                        <span class="card-title">Event details:</span>
                        <p><?php echo getEventDetails($event); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require 'footer.php';
    exit();
}


?>

<h5 class="center white-text shadow"><?php echo getEventDepartment($event); ?></h5>

<div class="row">
    <div class="col s12 m4">
        <blockquote class="collapsible-header z-depth-5">
            <i class="material-icons tiny">date_range</i>Date: <?php echo getEventDate($event); ?>
        </blockquote>
    </div>
    <div class="col s12 m4">
        <blockquote class="collapsible-header z-depth-5">
            <i class="material-icons tiny">access_time</i>Time: <?php echo getEventTime($event); ?>
        </blockquote>
    </div>
    <div class="col s12 m4">
        <blockquote class="collapsible-header z-depth-5">
            <i class="material-icons tiny">location_on</i>Venue: <?php echo getEventVenue($event); ?>
        </blockquote>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s12 m3 l3">
            <div class="card z-depth-5">
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">Event Name</span>
                    <p></p>
                    <p><b><?php echo getName($event); ?></b></p>
                    <p style="text-align: left"><?php echo getEventDescription($event); ?><br></p>
                </div>
            </div>
            <div class="card z-depth-4">
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">Coordinators</span>
                    <?php echo getEventCoordinators($event); ?>
                </div>
            </div>
        </div>

        <div class="col s12 m9 l9">
            <div class="card z-depth-5">
                <div class="card-content">
                    <span class="card-title">Event details:</span>
                    <p><?php echo getEventDetails($event); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>
