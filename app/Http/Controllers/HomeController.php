<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'meta_title' => 'StaffViz | Productivity Management & Time Tracking Software',
            'meta_descp' => "StaffViz time tracker software is world's #1 productivity management tool for remote & in-office teams with peace of mind, accountability & actionable insights.",
        ];
        return view('theme.index', ['data' => $data]);
    }

    public function step()
    {
        $data = [
            'meta_title' => 'StaffViz - Redefining Work Dynamics',
            'meta_descp' => 'Discover StaffViz, your comprehensive solution for optimizing workplace efficiency. Streamline operations and enhance productivity effortlessly.',
        ];
        return view('theme.step.index', ['data' => $data]);
    }

    public function features_page()
    {
        $data = [
            'meta_title' => 'Discover StaffViz Features: Empower Your Workplace Efficiency',
            'meta_descp' => 'Explore the comprehensive features of StaffViz employee monitoring software. Unlock productivity insights and streamline operations effortlessly.',
        ];
        return view('theme.features-old', ['data' => $data]);
    }

    public function features_page_2()
    {
        $data = [
            'meta_title' => 'Discover StaffViz Features: Empower Your Workplace Efficiency',
            'meta_descp' => 'Explore the comprehensive features of StaffViz employee monitoring software. Unlock productivity insights and streamline operations effortlessly.',
        ];
        return view('theme.features', ['data' => $data]);
    }

    public function apps()
    {
        $data = [
            'meta_title' => 'Download StaffViz Apps: Enhance Workplace Efficiency',
            'meta_descp' => 'Access the StaffViz mobile and desktop apps for seamless employee monitoring. Boost productivity on the go with our intuitive solutions.',
        ];
        return view('theme.apps', ['data' => $data]);
    }

    public function partner_program()
    {
        $data = [
            'meta_title' => 'Join StaffViz Affiliate Program: Earn Rewards Today!',
            'meta_descp' => 'Become a StaffViz affiliate and start earning rewards for promoting our employee monitoring software. Join now and boost your income with us!',
        ];
        return view('theme.partner_program', ['data' => $data]);
    }

    public function about_us()
    {
        $data = [
            'meta_title' => 'About StaffViz: Redefining Work Dynamics',
            'meta_descp' => 'Learn more about StaffViz and our mission to empower workplace efficiency. Discover our journey, values, and commitment to excellence.',
        ];
        return view('theme.about_us', ['data' => $data]);
    }

    public function terms_conditions()
    {
        $data = [
            'meta_title' => 'StaffViz Terms & Conditions: Understand Our Usage Policies',
            'meta_descp' => 'Review StaffViz`s terms & conditions before using our employee monitoring software. Learn about privacy, usage guidelines, and legal responsibilities.',
        ];
        return view('theme.terms_conditions', ['data' => $data]);
    }

    public function contact_us()
    {
        $data = [
            'meta_title' => 'Contact StaffViz: Reach Our Support Team',
            'meta_descp' => 'Have questions about StaffViz? Contact our dedicated support team for tailored solutions and assistance with workplace productivity.',
        ];
        return view('theme.contact_us', ['data' => $data]);
    }

    public function gitex_contact_us()
    {
        $data = [
            'meta_title' => 'Contact Us to Learn More About the Process and Our Services',
            'meta_descp' => "Reach out to our team for any inquiries or support. We're here to help with your questions and provide expert guidance about the process. Contact us today!",
        ];
        return view('theme.gitex_contact_us', ['data' => $data]);
    }

    public function message()
    {
        $data = [
            'meta_title' => 'StaffViz - Redefining Work Dynamics',
            'meta_descp' => 'Discover StaffViz, your comprehensive solution for optimizing workplace efficiency. Streamline operations and enhance productivity effortlessly.',
        ];
        return view('theme.message', ['data' => $data]);
    }

    public function solutions()
    {
        $data = [
            'meta_title' => 'StaffViz Time Tracking Solutions for Workplace Excellence',
            'meta_descp' => 'Discover StaffViz`s tailored time tracker for optimized workplace productivity. Find the perfect fit for your business needs.',
        ];
        return view('theme.solutions', ['data' => $data]);
    }

    public function integrations()
    {
        $data = [
            'meta_title' => 'StaffViz Integrations: Seamlessly Enhance Your Workflow',
            'meta_descp' => 'Explore StaffViz`s range of integrations to seamlessly enhance your workflow and boost productivity. Connect your favorite tools effortlessly.',
        ];
        return view('theme.integrations', ['data' => $data]);
    }

    public function industries()
    {
        $data = [
            'meta_title' => 'StaffViz | Industries We Serves',
            'meta_descp' => 'StaffViz is a time tracking software used across 20+ industries to track time, manage employees, automate training, and more.',
        ];
        return view('theme.industries', ['data' => $data]);
    }

    public function blogs()
    {
        $data = [
            'meta_title' => 'StaffViz | Explore Time Tracking & Employee Monitoring Insights',
            'meta_descp' => 'Discover articles on time tracking, employee monitoring, and micromanagement. Compare StaffViz with top competitors for informed business decisions.',
        ];
        return view('theme.blogs', ['data' => $data]);
    }
    public function blogs_new()
    {
        $data = [
            'meta_title' => 'StaffViz | Explore Time Tracking & Employee Monitoring Insights',
            'meta_descp' => 'Discover articles on time tracking, employee monitoring, and micromanagement. Compare StaffViz with top competitors for informed business decisions.',
        ];
        return view('theme.blogs-new', ['data' => $data]);
    }

    public function case_studies()
    {
        $data = [
            'meta_title' => 'StaffViz | Case Studies',
            'meta_descp' => 'Explore how StaffViz caters to various industries, providing tailored solutions to enhance productivity and streamline operations effectively. ',
        ];
        return view('theme.case-studies', ['data' => $data]);
    }

    public function case_study_result_driven()
    {
        $data = [
            'meta_title' => 'StaffViz Accelerated Growth for Results Driven | Case Study ',
            'meta_descp' => 'Discover the performance optimization journey of Results Driven with StaffViz, integrating smart monitoring tools to boost business growth.',
        ];
        return view('theme.case-studies.case-study-result-driven', ['data' => $data]);
    }

    public function case_study_c2m()
    {
        $data = [
            'meta_title' => 'StaffViz Enhanced Efficiency for Click2Mail | Case Study ',
            'meta_descp' => 'Explore the transformative impact of StaffViz on Click2Mail, achieving heightened operational efficiency with innovative time management technologies.',
        ];
        return view('theme.case-studies.case-study-c2m', ['data' => $data]);
    }

    public function case_study_pws()
    {
        $data = [
            'meta_title' => 'StaffViz Optimized Workforce Management for PWS | Case Study ',
            'meta_descp' => 'Discover how StaffViz optimized workforce management for Physician Wealth Systems with advanced productivity tools and employee monitoring.',
        ];
        return view('theme.case-studies.case-study-pws', ['data' => $data]);
    }

    public function itcn_25th()
    {
        $data = [
            'meta_title' => 'StaffViz | ITCN-Karachi',
            'meta_descp' => 'Explore how StaffViz caters to various industries, providing tailored solutions to enhance productivity and streamline operations effectively. ',
        ];
        return view('theme.itcn_25th', ['data' => $data]);
    }

    public function gitex()
    {
        $data = [
            'meta_title' => 'Join StaffViz at GITEX 2024 (Expand North Star) for a Debut',
            'meta_descp' => 'Explore the latest tech innovations at GITEX 2024. Join StaffViz for a big debut and other industry leaders discover cutting-edge digital solutions.',
        ];
        return view('theme.gitex', ['data' => $data]);
    }
    public function thank_you()
    {
        $data = [
            'meta_title' => 'StaffViz | Thank You',
            'meta_descp' => 'Have questions about StaffViz? Contact our dedicated support team for tailored solutions and assistance with workplace productivity.',
        ];
        return view('theme.thank_you', ['data' => $data]);
    }

    // Blogs List
    public function why_time_tracking()
    {
        $data = [
            'meta_title' => 'Why Time Tracking is Important for Modern Organizations | Blog',
            'meta_descp' => "Learn how time tracking plays a vital role in boosting productivity, optimizing resources, and improving project outcomes in today's fast-paced organizations.",
        ];
        return view('theme.blogs.why-time-tracking', ['data' => $data]);
    }
    public function understanding_quiet_quitting()
    {
        $data = [
            'meta_title' => 'What is Quiet Quitting and How to Address It | Blog ',
            'meta_descp' => "Learn what staff productivity is and how to improve it. Boost your team's efficiency, achieve business goals faster, and drive success with these proven tips.",
        ];
        return view('theme.blogs.understanding-quiet-quitting', ['data' => $data]);
    }
    public function avoid_micromanagement()
    {
        $data = [
            'meta_title' => ' How To Avoid Micromanagement using Advanced Solutions | Blog ',
            'meta_descp' => "Read the completed blog to discover effective strategies to avoid micromanagement and foster a healthier, more productive work environment for your employees. ",
        ];
        return view('theme.blogs.avoid-micromanagement', ['data' => $data]);
    }
    public function hybrid_or_remote_work()
    {
        $data = [
            'meta_title' => ' Hybrid Vs. Remote Work; What’s the Difference | Blog',
            'meta_descp' => "Discover how hybrid and remote work compare in flexibility, productivity, and team collaboration to determine the best fit for your work style.",
        ];
        return view('theme.blogs.hybrid-or-remote-work', ['data' => $data]);
    }
    public function staffviz_vs_hubstaff()
    {
        $data = [
            'meta_title' => 'StaffViz Vs.Hubstaff: An In-Depth Comparison',
            'meta_descp' => "StaffViz and Hubstaff are both time-tracking software that maximizes teams’ productivity. By comparing these two, let’s find out which one is the best.",
        ];
        return view('theme.blogs.staffviz-vs-hubstaff', ['data' => $data]);
    }
    public function staffviz_vs_clockify()
    {
        $data = [
            'meta_title' => 'StaffViz vs Clockify: Advanced Team Management Showdown',
            'meta_descp' => "Explore the key differences between StaffViz and Clockify for team management. Discover which tool offers the best features for enhancing team productivity. ",
        ];
        return view('theme.blogs.staffviz-vs-clockify', ['data' => $data]);
    }
    public function staffviz_vs_timedoctor()
    {
        $data = [
            'meta_title' => 'Time Doctor vs. StaffViz: Best Time Tracking for Business?',
            'meta_descp' => "Discover the key differences between Time Doctor and StaffViz for managing team productivity, with insights on features ideal for remote and large teams. ",
        ];
        return view('theme.blogs.staffviz-vs-time-doctor', ['data' => $data]);
    }
    public function staffviz_vs_toggltrack()
    {
        $data = [
            'meta_title' => 'StaffViz vs. Toggl: Choosing the Right Time Tracking Tool ',
            'meta_descp' => "Compare StaffViz and Toggl to determine the best time tracking tool for managing projects, productivity, and remote teams. Discover the ideal solution. ",
        ];
        return view('theme.blogs.staffviz-vs-toggltrack', ['data' => $data]);
    }
    public function industry_startup()
    {
        $data = [
            'meta_title' => 'Time Tracking Software for Startups | StaffViz',
            'meta_descp' => "Powerful time tracking software for startups & entrepreneurs that provides real-time insights to monitor profitability & workforce analytics ",
        ];
        return view('theme.industries.time-tracking-software-for-startups', ['data' => $data]);
    }
    public function industry_real_estate()
    {
        $data = [
            'meta_title' => 'Real Estate Time Tracking Software for Enhance Productivity',
            'meta_descp' => "Enhance real estate team’s efficiency with StaffViz time tracking software with automated reports to make data-driven decisions and boost performance. ",
        ];
        return view('theme.industries.industry-real-estate', ['data' => $data]);
    }
    public function industry_freelance()
    {
        $data = [
            'meta_title' => 'Time Tracking Software for Freelancers with Screenshots',
            'meta_descp' => "StaffViz is the best time tracking software for freelancers with productivity analytics and detailed online timesheets. ",
        ];
        return view('theme.industries.freelance', ['data' => $data]);
    }
    public function industry_merchandise()
    {
        $data = [
            'meta_title' => 'Best Time Tracking Software for Merchandising Business',
            'meta_descp' => "StaffViz time tracking software makes it easy to track time and manage team performance and productivity for your Merchandising Business.",
        ];
        return view('theme.industries.industry-merchandise', ['data' => $data]);
    }
    public function industry_architects()
    {
        $data = [
            'meta_title' => 'Time Tracking Software for Architects and Engineering Teams',
            'meta_descp' => " StaffViz time tracking software makes it easy to track time and manage team performance and productivity for Architectures and Engineers.",
        ];
        return view('theme.industries.industry-architects', ['data' => $data]);
    }
    public function industry_law_firms()
    {
        $data = [
            'meta_title' => 'The Best Time Tracking Software for Law Firm',
            'meta_descp' => "The most popular time tracker for lawyers and attorneys. Track time you spend on legal matters and calculate your hours based on your hourly rates. ",
        ];
        return view('theme.industries.industry-law-firms', ['data' => $data]);
    }
    public function industry_wholesale()
    {
        $data = [
            'meta_title' => 'The Best Time Tracking Software for Wholesale Business',
            'meta_descp' => "Time tracking software can help improve efficiency in your wholesale business by accurately tracking employee time, monitoring productivity and progress.",
        ];
        return view('theme.industries.industry-wholesale', ['data' => $data]);
    }
    public function industry_healthcare()
    {
        $data = [
            'meta_title' => 'Best Time Tracking Software for Healthcare',
            'meta_descp' => "Accurately track time and manage timesheets, scheduling and payroll with ease using StaffViz simple time tracking software for healthcare services. ",
        ];
        return view('theme.industries.industry-healthcare', ['data' => $data]);
    }
    public function industry_retailers()
    {
        $data = [
            'meta_title' => 'Best Time Tracking Software for Retail Business',
            'meta_descp' => "Description: Track time effortlessly with Workstatus. Boost productivity, automate time logs, and manage team performance with precise tracking tools. ",
        ];
        return view('theme.industries.industry-retailers', ['data' => $data]);
    }
    public function industry_accounting()
    {
        $data = [
            'meta_title' => 'Time Tracking Software for Accountants & Finance Firms',
            'meta_descp' => "StaffViz is simple time tracking software for accountants. Keep track of billable hours and streamline other administrative tasks.",
        ];
        return view('theme.industries.industry-accounting', ['data' => $data]);
    }
    public function time_management_strategies_for_peak_productivity()
    {
        $data = [
            'meta_title' => 'Effective Time Management Strategies for Peak Productivity | Blog ',
            'meta_descp' => "Time management is a skill many feels is hard to master, but there are some effective time management Strategies shared in this blog for higher productivity.",
        ];
        return view('theme.blogs.time-management-strategies-for-peak-productivity', ['data' => $data]);
    }
    public function ultimate_hacks_to_ease_time_management_for_employees()
    {
        $data = [
            'meta_title' => '5 Ultimate Hacks to Ease Time Managment for Employees | Blog',
            'meta_descp' => "Time management software, task management, 80/20 rule and there are many effective ways to ease time management for employees. Read the full blog for more info. ",
        ];
        return view('theme.blogs.5-ultimate-hacks-to-ease-time-management-for-employees', ['data' => $data]);
    }
    public function remote_meetings_101_the_essential_handbook()
    {
        $data = [
            'meta_title' => 'Remote Meetings 101; The Essential Guide | Blog',
            'meta_descp' => "Remote meetings have revolutionized the world and helped businesses survive, especially during Covid. Let’s see to what extent remote meetings have made an impact. ",
        ];
        return view('theme.blogs.remote-meetings-101-the-essential-handbook', ['data' => $data]);
    }
    public function everything_you_need_to_know_about_human_resource_development_in_2024()
    {
        $data = [
            'meta_title' => 'What is Human Resource Development; Everything You Need to Know  ',
            'meta_descp' => "Remote meetings have revolutionized the world and helped businesses survive, especially during Covid. Let’s see to what extent remote meetings have made an impact. ",
        ];
        return view('theme.blogs.everything-you-need-to-know-about-human-resource-development-in-2024', ['data' => $data]);
    }
    public function top_time_management_tools_in_2025_to_increase_team_productivity()
    {
        $data = [
            'meta_title' => 'Top Time Management Tools in 2025 | Boost Team Productivity',
            'meta_descp' => "Discover the best time management tools of 2025 to enhance team productivity. Streamline tasks, track performance, and achieve your goals efficiently.",
        ];
        return view('theme.blogs.top-time-management-tools-in-2025-to-increase-team-productivity', ['data' => $data]);
    }
    public function master_time_management_a_guide_to_stephen_coveys_time_management_matrix()
    {
        $data = [
            'meta_title' => "Time Management Matrix: Master Time Management with Covey's Guide",
            'meta_descp' => "Discover how to master time management using Stephen Covey's Time Management Matrix. Learn to prioritize, increase productivity, and achieve your goals effectively.",
        ];
        return view('theme.blogs.master-time-management-a-guide-to-stephen-coveys-time-management-matrix', ['data' => $data]);
    }
    public function performance_evaluation_types ()
    {
        $data = [
            'meta_title' => "14 Performance Evaluation Types: Let Employees Perform with StaffViz",
            'meta_descp' => "Discover how StaffViz enhances performance evaluations by providing time tracking and productivity insights, ensuring efficient employee reviews",
        ];
        return view('theme.blogs.14-performance-evaluation-types', ['data' => $data]);
    }
    public function performance_evaluation_templates ()
    {
        $data = [
            'meta_title' => "Performance Evaluations with StaffViz: A Roadmap to Employee Success ",
            'meta_descp' => "Discover how StaffViz enhances performance evaluations by providing time tracking, ensuring efficient, goal-oriented, and data-driven employee reviews. ",
        ];
        return view('theme.blogs.performance-evaluation-templates', ['data' => $data]);
    }
    public function program_management ()
    {
        $data = [
            'meta_title' => "Program Management vs Project Management: Key Differences",
            'meta_descp' => "Learn what the difference is between program management and project management and understand what will work best for your organization.",
        ];
        return view('theme.blogs.program-management-vs-project-management', ['data' => $data]);
    }
    public function sprint_planning ()
    {
        $data = [
            'meta_title' => "What Is Sprint Planning? Explore the Best Tools & Practices ",
            'meta_descp' => "Understand the best practices for sprint planning and how to build a strong foundation for your sprint.",
        ];
        return view('theme.blogs.sprint-planning', ['data' => $data]);
    }
    public function agile_vs_waterfall ()
    {
        $data = [
            'meta_title' => "Agile vs. Waterfall Project Management: A Comprehensive Guide ",
            'meta_descp' => "It all depends on the business and project type. We advise you to try both Agile and Waterfall methods and see for yourself which suits you best.",
        ];
        return view('theme.blogs.agile-vs-waterfall', ['data' => $data]);
    }
}
