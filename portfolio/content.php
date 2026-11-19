<?php
/*
 * ALL YOUR TEXT LIVES HERE.
 * Edit the words inside the quotes, save, refresh the browser.
 * Leave a link as "" (empty) and its button will be hidden automatically.
 * Keep the commas and quote marks. Use \" if you need a double quote inside text.
 */
return [

    'name'             => "Nurfarah Adibah",
    'full_name'        => "Nurfarah Adibah Binti Arba'in",
    'brand'            => "farah",
    'meta_description' => "Portfolio of Nurfarah Adibah, Bachelor of IT (Hons) student at UTHM, web developer working with PHP, MySQL and JavaScript.",

    'hero' => [
        'greeting' => "<hello world />",
        'headline' => "Hi, I'm",
        'nickname' => "Nurfarah Adibah",
        'role'     => "Web developer, graduating December 2026",
        'pitch'    => "Final-year Bachelor of Information Technology (Hons) student at Universiti Tun Hussein Onn Malaysia. I build responsive websites and the MySQL databases behind them, and I enjoy turning technical problems into tools people can actually use.",
        'photo'    => "assets/profile-img.jpg",   // replace the file or change this path
        'photo_alt'=> "Portrait of Nurfarah Adibah",
    ],

    'about' => [
        'title' => "Practical, curious, and quick to learn",
        'paragraphs' => [
            "I like work where the result is something a real person uses. During my internship I improved live corporate websites so they look consistent and work well on phones, tablets and desktops.",
            "For my final year project I built a Student Management System that schedules classes and assigns teachers automatically, and I managed its MySQL database from design to documentation.",
        ],
        'facts' => [
            ['value' => "3.47",      'label' => "Current CGPA"],
            ['value' => "Dec 2026",  'label' => "Expected graduation"],
            ['value' => "Top Coders", 'label' => "Malaysia 2025, national level"],
        ],
        // The dark "code" card
        'code' => [
            'role'       => "Web Developer",
            'stack'      => ["PHP", "MySQL", "JavaScript", "WordPress"],
            'graduates'  => "Dec 2026",
            'lookingFor' => "Junior web developer role",
            'learning'   => "always",
        ],
    ],

    // Newest first
    'experience' => [
        [
            'when'  => "Feb 2026 to Aug 2026",
            'title' => "Intern",
            'org'   => "I Concept Solutions (M) Sdn Bhd",
            'bullets' => [
                "Improved responsive layouts and interface consistency across several corporate websites, so pages work on all screen sizes.",
                "Worked with the development team to deliver website enhancements and fix technical issues against project requirements.",
                "Supported production web applications with interface improvements, feature enhancements and system support.",
            ],
        ],
        [
            'when'  => "Jun 2025 to Jan 2026",
            'title' => "Final Year Project: Student Management System",
            'org'   => "Universiti Tun Hussein Onn Malaysia",
            'bullets' => [
                "Built a Student Management System in PHP and MySQL that automates class scheduling and teacher assignments.",
                "Designed and managed the MySQL backend, and documented the full system development cycle.",
            ],
        ],
        [
            'when'  => "Jul 2022 to Sep 2022",
            'title' => "Part-time Staff",
            'org'   => "Hyper Pets Center",
            'bullets' => [
                "Recorded inventory and sales daily in the Point of Sale (POS) system, keeping stock records accurate.",
                "Trained new staff on the sales system and standard operating procedures.",
            ],
        ],
    ],

    'projects' => [
        [
            'title' => "Student Management System",
            'text'  => "Final year project. A web system that automatically schedules classes and assigns teachers, backed by a MySQL database I designed and documented end to end.",
            'image' => "assets/project-sms.svg",
            'alt'   => "Student Management System screenshot",
            'tags'  => ["PHP", "MySQL", "Auto scheduling", "System documentation"],
            'link'  => "",            // e.g. "https://github.com/yourname/your-repo"
            'link_label' => "View on GitHub",
        ],
        [
            'title' => "Corporate Website Improvements",
            'text'  => "Internship work at I Concept Solutions. I improved responsive layouts and interface consistency on several company websites and supported production web applications.",
            'image' => "assets/project-intern.svg",
            'alt'   => "Corporate website improvements screenshot",
            'tags'  => ["Responsive design", "UI consistency", "Team delivery"],
            'link'  => "",
            'link_label' => "View site",
        ],
    ],

    'skills' => [
        ['title' => "Web development", 'hint' => "Intermediate", 'items' => ["HTML", "CSS", "JavaScript", "PHP", "WordPress"]],
        ['title' => "Data",            'hint' => "Intermediate", 'items' => ["MySQL", "Microsoft Power BI"]],
        ['title' => "How I work",      'hint' => "Soft skills",  'items' => ["Time management", "Teamwork", "Fast learner", "Strategic thinker", "Willing to learn"]],
    ],

    'education' => [
        'degree' => "Bachelor of Information Technology with Honours",
        'school' => "Universiti Tun Hussein Onn Malaysia, Batu Pahat",
        'note'   => "Current CGPA 3.47. Expected graduation December 2026.",
    ],

    'languages' => [
        ['name' => "Malay",    'level' => "Proficient"],
        ['name' => "English",  'level' => "Moderate proficiency"],
        ['name' => "Mandarin", 'level' => "Basic proficiency"],
    ],

    'achievements' => [
        "Competed in Top Coders Malaysia 2025 (national level)",
        "Certificate of Completion, Power BI for Beginners",
        "CISCO certificate",
        "Certificate, AWANTEC NTW PERCIPIO Program",
        "Active in SAS Academic Programs for Students (Machine Learning)",
        "Organised and managed the SULAM Artificial Intelligence and Machine Learning Project",
    ],

    'contact' => [
        'title'    => "Let's build something together",
        'text'     => "I'm graduating in December 2026 and looking for a junior web developer role. The quickest way to reach me is email.",
        'email'    => "nurfarahadibah0321@gmail.com",
        'whatsapp' => "601161884485", // WhatsApp number in international format, without + or spaces
        'github'   => "",    // paste your GitHub profile link here
        'linkedin' => "",    // paste your LinkedIn profile link here
        'note'     => "Based in Puchong, Selangor. References available on request.",
    ],
];
