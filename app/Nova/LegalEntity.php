<?php

namespace App\Nova;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Panel;

class LegalEntity extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\LegalEntity';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'business_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Business Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('ABN')
                ->sortable()
                ->rules('required', 'max:255'),

            Select::make('Entity Type')
                ->options([
                    'Vendor',
                    'Customer'
                ]),

            Boolean::make('Active')->withMeta(['value' => true])->exceptOnForms(),

            new Panel('Address Information', $this->addressFields()),

            HasMany::make('Users')
        ];
    }

    protected function addressFields()
    {
        return [
            Place::make('Address', 'address_line_1')->countries(['AU'])
                 ->hideFromIndex()
                 ->city('suburb')
                 ->rules('required', 'max:255'),

            Text::make('Address Line 2')
                ->hideFromIndex()
                ->rules('max:255'),

            Text::make('Suburb')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Text::make('State')
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Text::make('Postal Code')
                ->hideFromIndex()
                ->rules('required', 'max:255'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
