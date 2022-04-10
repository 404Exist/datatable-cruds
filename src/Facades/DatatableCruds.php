<?php

namespace Exist404\DatatableCruds\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Exist404\DatatableCruds\DatatableCruds render(array $extendsData = [])
 * @method static \Exist404\DatatableCruds\DatatableCruds setModel(string $model)
 * @method static \Exist404\DatatableCruds\DatatableCruds setTitle(string $title)
 * @method static \Exist404\DatatableCruds\DatatableCruds setDir(string $dir)
 * @method static \Exist404\DatatableCruds\DatatableCruds setHeader(string $name, string $value)
 * @method static \Exist404\DatatableCruds\DatatableCruds with(mixed ...$with)
 * @method static \Exist404\DatatableCruds\DatatableCruds searchBy(mixed ...$searchBy)
 * @method static \Exist404\DatatableCruds\DatatableCruds setGetRoute(string $route)
 * @method static \Exist404\DatatableCruds\DatatableCruds setStoreRoute(string $route, string $method = 'post')
 * @method static \Exist404\DatatableCruds\DatatableCruds setUpdateRoute(string $route, string $method = 'patch')
 * @method static \Exist404\DatatableCruds\DatatableCruds setDeleteRoute(string $route, string $method = 'delete')
 * @method static \Exist404\DatatableCruds\DatatableCruds setRequestFindByKey(string $findBy)
 * @method static \Exist404\DatatableCruds\DatatableCruds setDefaultDateFormat(string $dateFormat)
 * @method static \Exist404\DatatableCruds\DatatableCruds setDefaultOrder(string $orderBy = 'created_at', string $order = 'desc')
 * @method static \Exist404\DatatableCruds\DatatableCruds addAction(string $html = null, string $onclick = 'openModal', string|bool $value = true)
 * @method static \Exist404\DatatableCruds\DatatableCruds editAction(string $html = null, string $onclick = 'openModal', string|bool $value = true)
 * @method static \Exist404\DatatableCruds\DatatableCruds deleteAction(string $html = null, string $onclick = 'openModal', string|bool $value = true)
 * @method static \Exist404\DatatableCruds\DatatableCruds cloneAction(string $html = null, string $onclick = 'openModal', string|bool $value = true)
 * @method static \Exist404\DatatableCruds\DatatableCruds search(string $debounce, string $class = 'form-control')
 * @method static \Exist404\DatatableCruds\DatatableCruds exports(array $exports = [])
 * @method static \Exist404\DatatableCruds\DatatableCruds setText(string $key, string $text)
 * @method static \Exist404\DatatableCruds\DatatableCruds setLimits(mixed ...$limits)
 * @method static \Exist404\DatatableCruds\DatatableCruds formWidth(int $width)
 * @method static \Exist404\DatatableCruds\DatatableCruds storeButton(string $label = 'Create', string $color = 'primary')
 * @method static \Exist404\DatatableCruds\DatatableCruds updateButton(string $label = 'Update', string $color = 'primary')
 * @method static \Exist404\DatatableCruds\DatatableCruds deleteButton(string $label = 'Delete', string $color = 'danger')
 * @method static \Exist404\DatatableCruds\DatatableCruds setBladeExtends(string $extends)
 * @method static \Exist404\DatatableCruds\DatatableCruds setBladeSection(string $section)
 * @method static \Exist404\DatatableCruds\DatatableCruds sort(mixed ...$sorts)
 * @method static \Exist404\DatatableCruds\DatatableCruds except(mixed ...$excepts)
 * @method static \Exist404\DatatableCruds\DatatableCruds label(string $label)
 * @method static \Exist404\DatatableCruds\DatatableCruds html(string $html = '')
 * @method static \Exist404\DatatableCruds\DatatableCruds attributes(array $attributes)
 * @method static \Exist404\DatatableCruds\DatatableCruds setAttribute(string $name, string $value)
 * @method static \Exist404\DatatableCruds\DatatableCruds after(string $after)
 * @method static \Exist404\DatatableCruds\DatatableCruds before(string $before)
 * @method static \Exist404\DatatableCruds\DatatableCruds add()
 * @method static \Exist404\DatatableCruds\DatatableCruds fillColumns()
 * @method static \Exist404\DatatableCruds\DatatableCruds setColumns(mixed ...$columns)
 * @method static \Exist404\DatatableCruds\DatatableCruds column(string $name)
 * @method static \Exist404\DatatableCruds\DatatableCruds updateColumn(string $name)
 * @method static \Exist404\DatatableCruds\DatatableCruds deleteColumn(string $name)
 * @method static \Exist404\DatatableCruds\DatatableCruds sortable(bool $sortable = true)
 * @method static \Exist404\DatatableCruds\DatatableCruds searchable(bool $searchable = true)
 * @method static \Exist404\DatatableCruds\DatatableCruds image(string|bool|null $path = '')
 * @method static \Exist404\DatatableCruds\DatatableCruds date(string|bool|null $format = null)
 * @method static \Exist404\DatatableCruds\DatatableCruds checkall(string|bool|null $label = null)
 * @method static \Exist404\DatatableCruds\DatatableCruds actions(string|bool|null $label = null)
 * @method static \Exist404\DatatableCruds\DatatableCruds href(string $href = '')
 * @method static \Exist404\DatatableCruds\DatatableCruds exec(string $js, string|null $to = null)
 * @method static \Exist404\DatatableCruds\DatatableCruds fillInputs(int|null $maxInputsPerPage = null, string|null $parentClass = "mb-3")
 * @method static \Exist404\DatatableCruds\DatatableCruds setInputs(mixed ...$inputs)
 * @method static \Exist404\DatatableCruds\DatatableCruds input(string $name)
 * @method static \Exist404\DatatableCruds\DatatableCruds updateInput(string $name)
 * @method static \Exist404\DatatableCruds\DatatableCruds deleteInput(string $name)
 * @method static \Exist404\DatatableCruds\DatatableCruds type(string $type)
 * @method static \Exist404\DatatableCruds\DatatableCruds form(string $form)
 * @method static \Exist404\DatatableCruds\DatatableCruds page(int $page)
 * @method static \Exist404\DatatableCruds\DatatableCruds parentClass(string $parentClass)
 * @method static \Exist404\DatatableCruds\DatatableCruds labelClass(string $labelClass)
 * @method static \Exist404\DatatableCruds\DatatableCruds multiSelect(string $label = "name", string $val = "id", bool $multiple = true)
 * @method static \Exist404\DatatableCruds\DatatableCruds select(string $label = "name", string $val = "id")
 * @method static \Exist404\DatatableCruds\DatatableCruds options(array $options = [])
 * @method static \Exist404\DatatableCruds\DatatableCruds onChange(string $update, string $getDataFrom)
 * @method static \Exist404\DatatableCruds\DatatableCruds dropzone(array $dropZoneAttributes = [])
 * @method static \Exist404\DatatableCruds\DatatableCruds checkbox(bool $selectedValue = true, bool $unselectedValue = false)
 * @method static \Exist404\DatatableCruds\DatatableCruds radio($value)
 * @method static \Exist404\DatatableCruds\DatatableCruds tags()
 * @method static \Exist404\DatatableCruds\DatatableCruds editor(string|null $value = null)
 * @method static \Exist404\DatatableCruds\DatatableCruds optionsRoute(string $optionsRoute)
 *
 * @see \Exist404\DatatableCruds\DatatableCruds
 */
class DatatableCruds extends Facade
{
    protected static function getFacadeAccessor() { return 'datatablecruds'; }
}
