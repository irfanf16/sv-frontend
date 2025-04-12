<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class FeaturesController extends Controller
{
    public function __construct() {}

    public function training_management()
    {
        $data = [
            'meta_title' => 'Training Management Solutions to Streamline Learning Process',
            'meta_descp' => "Optimize your organization's learning programs with comprehensive training management solutions. Track, deliver, and measure training effectively.",
        ];
        return view('theme.features.training_management', ['data' => $data]);
    }
    public function assessments()
    {
        $data = [
            'meta_title' => 'Assessments | StaffViz',
            'meta_descp' => "Track employee time with screenshots using StaffViz's snapshot feature. Enhance productivity and accountability effortlessly.",
        ];
        return view('theme.features.assessments', ['data' => $data]);
    }
    public function client_management()
    {
        $data = [
            'meta_title' => 'StaffViz | Best Client Management Software',
            'meta_descp' => "StaffViz is the best client management software built to boost satisfaction, track performance, and achieve goals on time.",
        ];
        return view('theme.features.client_management', ['data' => $data]);
    }

    public function break_management()
    {
        $data = [
            'meta_title' => 'Break Management | StaffViz',
            'meta_descp' => "Track employee time with screenshots using StaffViz's snapshot feature. Enhance productivity and accountability effortlessly.",
        ];
        return view('theme.features.break_management', ['data' => $data]);
    }
    public function project_management()
    {
        $data = [
            'meta_title' => 'StaffViz | Agile Project Management​ Software',
            'meta_descp' => "Optimize workflows and deliver projects faster with Staffviz’s Agile Project Management Software. Monitor tasks to ensure every deadline is met seamlessly.",
        ];
        return view('theme.features.project_management', ['data' => $data]);
    }
    public function task_management()
    {
        $data = [
            'meta_title' => 'Task Management | StaffViz',
            'meta_descp' => "Track employee time with screenshots using StaffViz's snapshot feature. Enhance productivity and accountability effortlessly.",
        ];
        return view('theme.features.task_management', ['data' => $data]);
    }
    public function monitoring()
    {
        $data = [
            'meta_title' => 'StaffViz: The Best Employee Monitoring Software for Smarter Teams',
            'meta_descp' => "Choose StaffViz as the best employee monitoring software to track performance, manage remote teams, and boost workplace productivity.",
        ];
        return view('theme.features.monitoring', ['data' => $data]);
    }
    public function tracking()
    {
        $data = [
            'meta_title' => 'Activity Tracking for Real-Time Employee Monitoring ',
            'meta_descp' => "StaffViz offers real-time tracking of employee tasks and performance, enabling immediate productivity improvements and detailed insights.",
        ];
        return view('theme.features.tracking', ['data' => $data]);
    }
    public function productivity_analytics()
    {
        $data = [
            'meta_title' => 'Data-Driven Human Resource Analytics for Performance',
            'meta_descp' => "StaffViz's advanced productivity tracking software with time tracking and performance analytics. Gain actionable insights to optimize results.",
        ];
        return view('theme.features.productivity_analytics', ['data' => $data]);
    }
    public function snapshot_capturing()
    {
        $data = [
            'meta_title' => 'StaffViz | Time Tracker - Employee Monitoring with Screenshots',
            'meta_descp' => "Track employee time with screenshots using StaffViz's snapshot feature. Enhance productivity and accountability effortlessly.",
        ];
        return view('theme.features.snapshot_capturing', ['data' => $data]);
    }
    public function hr_management()
    {
        $data = [
            'meta_title' => "StaffViz | World's #1 Employee Management Software",
            'meta_descp' => "Streamline your HR operations with StaffViz’s integrated solutions for managing payroll, recruitment process, attendance, and compliance efficiently.",
        ];
        return view('theme.features.hr_management', ['data' => $data]);
    }
}
