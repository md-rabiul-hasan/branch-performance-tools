<?php 
    $pageName = basename($_SERVER['PHP_SELF']);
    switch ($pageName) {
    case "index.php":
        echo "DBL | BRANCH PERFORMANCE";
        break;
    case "brach-activaty.php":
        echo "DBL | BRANCH ACTIVATY";
        break;
    case "branch-average-activaty.php":
        echo "DBL | AVERAGE ACTIVATY";
        break;  
    case "branch-command-execution-time.php":
        echo "DBL | BRANCH COMMAND EXECUTION TIME";
        break; 
    case "branch-engaging-tso-oss":
        echo "DBL | BRANCH ENGAGING TSO & OSS";
        break;
    case "branch-job-volume.php":
        echo "DBL | JOB VOLUME";
        break; 
    case "branch-system-utilization.php":
        echo "DBL | SYSTEM UTILIZATION";
        break; 
    
    case "individual-contribution-oss.php":
        echo "DBL | INDIVIDUAL CONTRIBUTION OSS";
        break;
    case "individual-performance.php":
        echo "DBL | INDIVIDUAL PERFORMANCE";
        break;
    case "individual-system-utilization.php":
        echo "DBL | INDIVIDUAL SYSTEM UTILIZATION";
        break;
    case "individual-tso-wise-performance.php":
        echo "DBL | INDIVIDUAL TSO PERFORMANCE ";
        break;
    case "password-change.php":
        echo "DBL | PASSWORD CHANGE";
        break; 
    case "profile.php":
        echo "DBL | PROFILE";
        break; 
    case "login.php":
        echo "DBL | AUTHENTICATION";
        break; 
}
 ?>