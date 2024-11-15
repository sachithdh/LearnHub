 public function __construct(
        private TemplateEngine $view,
        private ValidatorService $validatorService,
        private CourseService $courseService
    ) {}