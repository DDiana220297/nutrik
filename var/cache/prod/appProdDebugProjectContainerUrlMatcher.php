<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/a')) {
            // nutritionist_accountpage
            if ('/account' === $pathinfo) {
                return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAccountAction',  '_route' => 'nutritionist_accountpage',);
            }

            // customer_about
            if ('/about' === $pathinfo) {
                return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::aboutAction',  '_route' => 'customer_about',);
            }

            // customer_add_event
            if ('/add-event' === $pathinfo) {
                return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::addEventAction',  '_route' => 'customer_add_event',);
            }

        }

        elseif (0 === strpos($pathinfo, '/nutritionist-')) {
            if (0 === strpos($pathinfo, '/nutritionist-p')) {
                // nutritionist_personal_data
                if ('/nutritionist-personal-data' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistPersonalDataAction',  '_route' => 'nutritionist_personal_data',);
                }

                if (0 === strpos($pathinfo, '/nutritionist-payment-data')) {
                    // nutritionist_payment_data
                    if ('/nutritionist-payment-data' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistPaymentDataAction',  '_route' => 'nutritionist_payment_data',);
                    }

                    // nutritionist_payment_data_delete
                    if ('/nutritionist-payment-data-delete' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistPaymentDataDeleteAction',  '_route' => 'nutritionist_payment_data_delete',);
                    }

                }

                // nutritionist_plans
                if ('/nutritionist-plans' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistPlansAction',  '_route' => 'nutritionist_plans',);
                }

            }

            elseif (0 === strpos($pathinfo, '/nutritionist-d')) {
                // nutritionist_didactic_content
                if ('/nutritionist-didactic-content' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDidacticContentAction',  '_route' => 'nutritionist_didactic_content',);
                }

                // nutritionist_diary
                if (0 === strpos($pathinfo, '/nutritionist-diary') && preg_match('#^/nutritionist\\-diary/(?P<id_diary_page>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nutritionist_diary']), array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDiaryAction',));
                }

                if (0 === strpos($pathinfo, '/nutritionist-delete-')) {
                    // nutritionist_delete_didactic_content
                    if ('/nutritionist-delete-didactic-content' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteDidacticContentAction',  '_route' => 'nutritionist_delete_didactic_content',);
                    }

                    // nutritionist_delete_weekly_plan
                    if ('/nutritionist-delete-weekly-plan' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteWeeklyPlanAction',  '_route' => 'nutritionist_delete_weekly_plan',);
                    }

                    // nutritionist_delete_event
                    if ('/nutritionist-delete-event' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteEventAction',  '_route' => 'nutritionist_delete_event',);
                    }

                    // nutritionist_delete_customer
                    if ('/nutritionist-delete-customer' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteCustomerAction',  '_route' => 'nutritionist_delete_customer',);
                    }

                    // nutritionist_delete_recipe
                    if ('/nutritionist-delete-recipe' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteRecipeAction',  '_route' => 'nutritionist_delete_recipe',);
                    }

                    // nutritionist_delete_appointment
                    if ('/nutritionist-delete-appointment' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistDeleteAppointmentAction',  '_route' => 'nutritionist_delete_appointment',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/nutritionist-a')) {
                if (0 === strpos($pathinfo, '/nutritionist-add-')) {
                    // nutritionist_add_didactic_content
                    if ('/nutritionist-add-didactic-content' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddDidacticContentAction',  '_route' => 'nutritionist_add_didactic_content',);
                    }

                    // nutritionist_add_plan
                    if ('/nutritionist-add-plan' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddPlansAction',  '_route' => 'nutritionist_add_plan',);
                    }

                    // nutritionist_add_event
                    if ('/nutritionist-add-event' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddEventAction',  '_route' => 'nutritionist_add_event',);
                    }

                    // nutritionist_add_customer
                    if ('/nutritionist-add-customer' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddCustomerAction',  '_route' => 'nutritionist_add_customer',);
                    }

                    // nutritionist_add_recipe
                    if ('/nutritionist-add-recipe' === $pathinfo) {
                        return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAddRecipeAction',  '_route' => 'nutritionist_add_recipe',);
                    }

                }

                // nutritionist_all_customers
                if ('/nutritionist-all-customers' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAllCustomersAction',  '_route' => 'nutritionist_all_customers',);
                }

                // nutritionist_appointments
                if ('/nutritionist-appointments' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAppointmentsAction',  '_route' => 'nutritionist_appointments',);
                }

                // nutritionist_assign_plans
                if ('/nutritionist-assign-plans' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAssignPlansAction',  '_route' => 'nutritionist_assign_plans',);
                }

                // nutritionist_assigned_customer_plans
                if (0 === strpos($pathinfo, '/nutritionist-assigned-customer-plans') && preg_match('#^/nutritionist\\-assigned\\-customer\\-plans/(?P<id_customer>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nutritionist_assigned_customer_plans']), array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistAssignedCustomerPlansAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/nutritionist-edit-')) {
                // nutritionist_edit_didactic_content
                if (0 === strpos($pathinfo, '/nutritionist-edit-didactic-content') && preg_match('#^/nutritionist\\-edit\\-didactic\\-content/(?P<id_entry>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nutritionist_edit_didactic_content']), array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditDidacticContentAction',));
                }

                // nutritionist_edit_weekly_plan
                if (0 === strpos($pathinfo, '/nutritionist-edit-weekly-plan') && preg_match('#^/nutritionist\\-edit\\-weekly\\-plan/(?P<id_plan>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nutritionist_edit_weekly_plan']), array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditWeeklyPlanAction',));
                }

                // nutritionist_edit_event
                if (0 === strpos($pathinfo, '/nutritionist-edit-event') && preg_match('#^/nutritionist\\-edit\\-event/(?P<id_event>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nutritionist_edit_event']), array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditEventAction',));
                }

                // nutritionist_edit_customer
                if (0 === strpos($pathinfo, '/nutritionist-edit-customer') && preg_match('#^/nutritionist\\-edit\\-customer/(?P<id_user>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nutritionist_edit_customer']), array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditCustomerAction',));
                }

                // nutritionist_edit_recipe
                if (0 === strpos($pathinfo, '/nutritionist-edit-recipe') && preg_match('#^/nutritionist\\-edit\\-recipe/(?P<id_recipe>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nutritionist_edit_recipe']), array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditRecipeAction',));
                }

                // nutritionist_edit_appointment
                if (0 === strpos($pathinfo, '/nutritionist-edit-appointment') && preg_match('#^/nutritionist\\-edit\\-appointment/(?P<id_appointment>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nutritionist_edit_appointment']), array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEditAppointmentAction',));
                }

            }

            // nutritionist_events
            if ('/nutritionist-events' === $pathinfo) {
                return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistEventsAction',  '_route' => 'nutritionist_events',);
            }

            if (0 === strpos($pathinfo, '/nutritionist-c')) {
                // nutritionist_customers
                if ('/nutritionist-customers' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistCustomersAction',  '_route' => 'nutritionist_customers',);
                }

                // nutritionist_customer_delete_weekly_plan
                if ('/nutritionist-customer-delete-weekly-plan' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistCustomerDeleteWeeklyPlanAction',  '_route' => 'nutritionist_customer_delete_weekly_plan',);
                }

                // nutritionist_calendar
                if ('/nutritionist-calendar' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistCalendarAction',  '_route' => 'nutritionist_calendar',);
                }

                // nutritionist_configuration
                if ('/nutritionist-config' === $pathinfo) {
                    return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistConfigurationAction',  '_route' => 'nutritionist_configuration',);
                }

            }

            // nutritionist_recipes
            if ('/nutritionist-recipes' === $pathinfo) {
                return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistRecipesAction',  '_route' => 'nutritionist_recipes',);
            }

            // nutritionist_schedule_appointment
            if ('/nutritionist-schedule-appointment' === $pathinfo) {
                return array (  '_controller' => 'NutritionistBundle\\Controller\\NutritionistController::nutritionistScheduleAppointmentAction',  '_route' => 'nutritionist_schedule_appointment',);
            }

        }

        // customer_news
        if ('/news' === $pathinfo) {
            return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::newsAction',  '_route' => 'customer_news',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pr')) {
                // customer_professionals
                if ('/professionals' === $pathinfo) {
                    return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::professionalsAction',  '_route' => 'customer_professionals',);
                }

                // customer_progress
                if ('/progress' === $pathinfo) {
                    return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::progressAction',  '_route' => 'customer_progress',);
                }

                if (0 === strpos($pathinfo, '/pruebas')) {
                    // pruebas_form
                    if ('/pruebas/form' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::formAction',  '_route' => 'pruebas_form',);
                    }

                    // pruebas_create
                    if ('/pruebas/add' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::addAction',  '_route' => 'pruebas_create',);
                    }

                    // pruebas_validate
                    if (0 === strpos($pathinfo, '/pruebas/validarEmail') && preg_match('#^/pruebas/validarEmail/(?P<email>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'pruebas_validate']), array (  '_controller' => 'AppBundle\\Controller\\PruebasController::validarEmailAction',));
                    }

                }

            }

            // customer_packages
            if ('/packages' === $pathinfo) {
                return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::packagesAction',  '_route' => 'customer_packages',);
            }

            // customer_personal_data
            if ('/personal-data' === $pathinfo) {
                return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::personalDataAction',  '_route' => 'customer_personal_data',);
            }

            if (0 === strpos($pathinfo, '/plan')) {
                // customer_plans
                if ('/plans' === $pathinfo) {
                    return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::plansAction',  '_route' => 'customer_plans',);
                }

                // customer_plan
                if (preg_match('#^/plan/(?P<id_plan>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'customer_plan']), array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::viewPlanAction',));
                }

            }

        }

        // customer_event_view
        if (0 === strpos($pathinfo, '/event') && preg_match('#^/event/(?P<id_event>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'customer_event_view']), array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::eventViewAction',));
        }

        // customer_didactic_content_view
        if (0 === strpos($pathinfo, '/didactic_content') && preg_match('#^/didactic_content/(?P<id_entry>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'customer_didactic_content_view']), array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::didactiContentViewAction',));
        }

        // customer_diary
        if ('/diary' === $pathinfo) {
            return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::diaryAction',  '_route' => 'customer_diary',);
        }

        // customer_didactic_content
        if ('/content' === $pathinfo) {
            return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::didacticContentAction',  '_route' => 'customer_didactic_content',);
        }

        // customer_calendar
        if ('/calendar' === $pathinfo) {
            return array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::calendarAction',  '_route' => 'customer_calendar',);
        }

        // customer_recipes
        if (0 === strpos($pathinfo, '/recipes') && preg_match('#^/recipes/(?P<id_recipe>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'customer_recipes']), array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::recipesAction',));
        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'CustomsBundle\\Controller\\AuthController::registerAction',  '_route' => 'register',);
        }

        // customer_messenger
        if (0 === strpos($pathinfo, '/messenger') && preg_match('#^/messenger/(?P<id_message>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'customer_messenger']), array (  '_controller' => 'CustomerBundle\\Controller\\CustomerController::messengerAction',));
        }

        // customs_homepage
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'CustomsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'customs_homepage',);
        }

        // helloWorld
        if ('/hello-world' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::helloWorldAction',  '_route' => 'helloWorld',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'CustomsBundle\\Controller\\AuthController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return ['_route' => 'login_check'];
            }

            // fullloginpage
            if ('/loginpage' === $pathinfo) {
                return array (  '_controller' => 'CustomsBundle\\Controller\\AuthController::indexAction',  '_route' => 'fullloginpage',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return ['_route' => 'logout'];
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
