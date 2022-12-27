<?php

namespace App\Providers;

use Acme\ColorPicker\ColorPicker;
use Acme\ImageCollection\ImageCollection;
use App\Nova\ContactUs;
use App\Nova\User;
use Illuminate\Http\Request;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Illuminate\Support\Facades\Gate;
use Eminiarts\Tabs\Tabs;
use Eminiarts\Tabs\Tab;
use Gwd\FlexibleContent\FlexibleContent;
use Halimtuhu\ArrayImages\ArrayImages;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Whitecube\NovaFlexibleContent\Flexible;




use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                MenuSection::make(__('user'), [
                    MenuItem::resource(User::class),
                ])->icon('user')->collapsable(),
                MenuSection::make(__('ContactUs '), [
                    MenuItem::resource(ContactUs::class),
                ])->icon('annotation')->collapsable(),

                MenuSection::make(__('seting'), [
                    MenuSection::make(__('Main Page'))->path('/nova-settings/main-page'),
                    MenuSection::make(__('About Us Page'))->path('/nova-settings/about-us-page'),
                    // MenuSection::make( __('Counct us'))->path('nova-settings/count-us'),
                    // MenuSection::make( __('Footer link'))->path('/nova-settings/footer-link'),
                ])->icon('adjustments')->collapsable(),


            ];
        });
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Tabs::make(__('Some Title'), [
                Tab::make(__('Top Header'), [
                    Text::make(__('phone'), 'phone_Top-Header'),
                    Text::make(__('Email'), 'email_Top-Header'),
                    Text::make(__('whatsapp'), 'whatsapp_Top-Header'),
                    Text::make(__('facebook'), 'facebook_Top-Header'),
                    Text::make(__('workHour'), 'workHour_Top-Header'),
                ]),
                Tab::make(__('Header'), [
                    Image::make(__('Logo'), 'logo')->disk('public'),
                    Flexible::make('navbar', 'navbar')
                        ->addLayout('Simple content section', 'wysiwyg', [
                            Text::make(__('name')),
                            Select::make('name', 'select_name')->options([
                                'about-us' => 'about-us',
                                'features' => 'features',
                                'services' => 'services',
                                'contact' => 'contact',

                            ])->rules('required'),
                        ]),
                ]),
                Tab::make(__('Top Banner'), [
                    Text::make(__('Title'), 'title_Top-Banner'),
                    Text::make(__('sub Title'), 'subtitle_Top-Banner'),
                    Text::make(__('video Title'), 'video_Top-Banner'),
                    Text::make(__('video url'), 'video_Url_Top-Banner'),
                    Text::make(__('second sub Title'), 'second_subtitle_Top-Banner'),
                    Text::make(__('Name'), 'name_Top-Banner'),
                    Text::make(__('Phone'), 'Phone_Top-Banner'),
                    Text::make(__('Location'), 'Location_Top-Banner'),
                    Text::make(__('Button Text'), 'bottom_text_Top-Banner'),
                    Text::make(__('Button Link'), 'bottom_link_Top-Banner'),

                    // photos
                    // ColorPicker::make('Color'),
                    ImageCollection::make('image', 'image')->imageType(1),


                ]),
                Tab::make(__('About Us'), [
                    Text::make(__('Title'), 'title_About_Us'),
                    Text::make(__('sub Title'), 'subtitle_About_Us'),
                    Text::make(__('Button Text'), 'bottom_text_About_Us'),
                    Text::make(__('Button Link'), 'bottom_link_About_Us'),

                    // photos
                    Image::make(__('First Image'), 'First_Image_About_Us')->disk('public'),
                    Image::make(__('Second Image'), 'Second_Image_About_Us')->disk('public'),
                    Image::make(__('Third Image'), 'third_Image_About_Us')->disk('public'),


                    // ImageCollection::make('image', 'image')->imageType(5),

                ]),
                Tab::make(__('our Services'), [
                    Text::make(__('Title'), 'title_Our_Services'),
                    Text::make(__('sub Title'), 'subtitle_Our_Services'),
                    // photos
                    ImageCollection::make('image', 'image')->imageType(2),

                ]),
                Tab::make(__('offers'), [
                    Number::make('Balance', 'balance'),
                    ImageCollection::make('image', 'image')->imageType(3),

                ]),
                Tab::make(__('contact Us'), [
                    Number::make('Balance', 'balance'),
                ]),
                Tab::make(__('customer recommendation'), [
                    Number::make('Balance', 'balance'),
                    ImageCollection::make('image', 'image')->imageType(4),

                ]),
                Tab::make(__('Footer'), [
                    Number::make('Balance', 'balance'),
                ]),
            ])
        ], [
            'Projects_News' => 'array',
        ], __('Main Page'));
    }


    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    public function tools()
    {
        return [
            // ...
            new \Outl1ne\NovaSettings\NovaSettings,
            new \Badinansoft\LanguageSwitch\LanguageSwitch(),
        ];
    }
}
