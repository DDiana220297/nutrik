<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'nutritionist_accountpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_personal_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistPersonalDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-personal-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_payment_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistPaymentDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-payment-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_payment_data_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistPaymentDataDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-payment-data-delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_didactic_content' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDidacticContentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-didactic-content',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_add_didactic_content' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddDidacticContentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-add-didactic-content',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_delete_didactic_content' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteDidacticContentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-delete-didactic-content',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_edit_didactic_content' => array (  0 =>   array (    0 => 'id_entry',  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditDidacticContentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_entry',    ),    1 =>     array (      0 => 'text',      1 => '/nutritionist-edit-didactic-content',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_add_plan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddPlansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-add-plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_plans' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistPlansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-plans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_delete_weekly_plan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteWeeklyPlanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-delete-weekly-plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_edit_weekly_plan' => array (  0 =>   array (    0 => 'id_plan',  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditWeeklyPlanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_plan',    ),    1 =>     array (      0 => 'text',      1 => '/nutritionist-edit-weekly-plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_events' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEventsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_add_event' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-add-event',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_delete_event' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-delete-event',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_edit_event' => array (  0 =>   array (    0 => 'id_event',  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_event',    ),    1 =>     array (      0 => 'text',      1 => '/nutritionist-edit-event',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_customers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistCustomersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-customers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_all_customers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAllCustomersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-all-customers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_add_customer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddCustomerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-add-customer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_edit_customer' => array (  0 =>   array (    0 => 'id_user',  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditCustomerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_user',    ),    1 =>     array (      0 => 'text',      1 => '/nutritionist-edit-customer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_delete_customer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteCustomerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-delete-customer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_diary' => array (  0 =>   array (    0 => 'id_diary_page',  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDiaryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_diary_page',    ),    1 =>     array (      0 => 'text',      1 => '/nutritionist-diary',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_recipes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistRecipesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-recipes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_add_recipe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddRecipeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-add-recipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_edit_recipe' => array (  0 =>   array (    0 => 'id_recipe',  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditRecipeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_recipe',    ),    1 =>     array (      0 => 'text',      1 => '/nutritionist-edit-recipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_delete_recipe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteRecipeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-delete-recipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_schedule_appointment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistScheduleAppointmentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-schedule-appointment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_appointments' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAppointmentsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-appointments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_delete_appointment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteAppointmentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-delete-appointment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_edit_appointment' => array (  0 =>   array (    0 => 'id_appointment',  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditAppointmentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_appointment',    ),    1 =>     array (      0 => 'text',      1 => '/nutritionist-edit-appointment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_calendar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistCalendarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_assign_plans' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAssignPlansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-assign-plans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_assigned_customer_plans' => array (  0 =>   array (    0 => 'id_customer',  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAssignedCustomerPlansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_customer',    ),    1 =>     array (      0 => 'text',      1 => '/nutritionist-assigned-customer-plans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_customer_delete_weekly_plan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistCustomerDeleteWeeklyPlanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-customer-delete-weekly-plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nutritionist_configuration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistConfigurationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nutritionist-config',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_professionals' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::professionalsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/professionals',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_packages' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::packagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/packages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_event_view' => array (  0 =>   array (    0 => 'id_event',  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::eventViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_event',    ),    1 =>     array (      0 => 'text',      1 => '/event',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_didactic_content_view' => array (  0 =>   array (    0 => 'id_entry',  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::didactiContentViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_entry',    ),    1 =>     array (      0 => 'text',      1 => '/didactic_content',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_didactic_content' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::didacticContentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/content',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_personal_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::personalDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personal-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_diary' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::diaryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diary',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_calendar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::calendarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_add_event' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::addEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-event',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_recipes' => array (  0 =>   array (    0 => 'id_recipe',  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::recipesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_recipe',    ),    1 =>     array (      0 => 'text',      1 => '/recipes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_progress' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::progressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/progress',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_messenger' => array (  0 =>   array (    0 => 'id_message',  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::messengerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_message',    ),    1 =>     array (      0 => 'text',      1 => '/messenger',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_plans' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::plansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/plans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_plan' => array (  0 =>   array (    0 => 'id_plan',  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::viewPlanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_plan',    ),    1 =>     array (      0 => 'text',      1 => '/plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customs_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomsBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomsBundle\\Controller\\AuthController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomsBundle\\Controller\\AuthController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fullloginpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomsBundle\\Controller\\AuthController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginpage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pruebas/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pruebas/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_validate' => array (  0 =>   array (    0 => 'email',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::validarEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    1 =>     array (      0 => 'text',      1 => '/pruebas/validarEmail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'helloWorld' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::helloWorldAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello-world',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
