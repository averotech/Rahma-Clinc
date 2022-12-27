<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Sietse85\NovaButton\Button;
use App\Nova\Actions\ReadMessage;

class ContactUs extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ContactUs>
     */
    public static $model = \App\Models\ContactUs::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];
    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('ContactUs');
    }
    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('ContactUs');
    }

        /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\ContactUs  $ContactUs
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public static function authorizedToCreate(Request $request)
    {
        return false;
    }
       /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\ContactUs  $ContactUs
     * @param  \App\Models\ActionEvents  $actionEvents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function authorizedTodelete(Request $request)
    {
        return false;
    }
   /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\ContactUs  $ContactUs
     * @param  \App\Models\ActionEvents  $actionEvents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function authorizedToupdate(Request $request)
    {
        return false;
    }
    /**
     * Determine whether the user can Replicate the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ActionEvents  $actionEvents
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function authorizedToReplicate(Request $request)
    {
        return false;
    }
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('location', 'location')
                ->sortable()
                ->rules('required', 'max:255'),
            Boolean::make('is_read', 'is_read'),
            Button::make('Read Message')->action(ReadMessage::class)->canSee(function () {
                return $this->is_read === '0';
            })->reload()->style('success'),
            Button::make('Message Read')->visible($this->is_read === '1')->canSee(function () {
                return $this->is_read === '1';
            })->disabled()->style('grey'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
