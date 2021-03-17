<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @DataTables/datatable_js.html.twig */
class __TwigTemplate_e0e7d28f7b233f531a1e11ce340b660b1ce41b7eeb4f12e6969f42a1f053cc3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DataTables/datatable_js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DataTables/datatable_js.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@DataTables/datatable_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{#<script type=\"text/javascript\">
    \$(document).ready(function () {
        var defaults = {};
        var options = {{ options|json_encode(64)|raw }};

        \$.extend(defaults, options);
        \$.extend(defaults, callbacks);

        var oTable = \$('#{{ datatable.setting('name') }}');

        {% if datatable.setting('requestState') %}
        oTable
            .on('preXhr.dt', function (e, settings) {
                if (!settings.ajax.url) {
                    var url = window.location.origin + window.location.pathname;
                    var search = \$.extend({}, settings.oAjaxData);
                    var params = \$.deparam(window.location.search.substring(1));

                    delete search['draw'];
                    delete search['start'];
                    delete search['order'];
                    delete search['columns'];
                    delete search['length'];
                    delete search['search'];
                    delete params['{{ datatable.setting('name') }}_start'];
                    delete params['{{ datatable.setting('name') }}_order'];
                    delete params['{{ datatable.setting('name') }}_columns'];
                    delete params['{{ datatable.setting('name') }}_length'];
                    delete params['{{ datatable.setting('name') }}_search'];
                    delete params['{{ datatable.setting('name') }}_state'];

                    for (var k in search) {
                        if (search.hasOwnProperty(k)) {
                            delete params[k];
                        }
                    }

                    settings.ajax.url = url + (Object.keys(params).length > 0 ? ('?' + \$.param(params)) : '');
                }
            })
            .on('draw.dt', function (e, settings) {
                var search = \$.extend({}, settings.oAjaxData);
                var params = \$.deparam(window.location.search.substring(1));

                \$.extend(params, {
                    {{ datatable.setting('name') }}_start: search.start,
                    {{ datatable.setting('name') }}_order: search.order,
                    {{ datatable.setting('name') }}_length: search.length,
                    {{ datatable.setting('name') }}_state: 1
                });

                if (search.search.value !== '')
                    params.{{ datatable.setting('name') }}_search = search.search.value;

                delete params['{{ datatable.setting('name') }}_columns'];

                \$(search.columns).each(function (idx, ele) {
                    if (ele.search.value !== '') {
                        params['{{ datatable.setting('name') }}_columns[' + idx + ']'] = ele.search.value;
                    }
                });

                delete search['draw'];
                delete search['start'];
                delete search['order'];
                delete search['columns'];
                delete search['length'];
                delete search['search'];

                \$.extend(params, search);

                history.pushState(null, null, \"?\" + \$.param(params));
            });

        {% if datatable.state.fromInitialRequest %}
        \$.extend(defaults, {
            stateLoadCallback: function (settings) {
                var state = {
                    time: new Date(),
                    start: {{ datatable.state.start }},
                    length: {{ datatable.state.length }},
                    search: {search: '{{ datatable.state.search }}'},
                    order: [],
                    columns: []
                };

                {% for column in datatable.state.columns %}
                state.columns.push({search: {search: '{{ column.searchValue }}'}});

                {% if column.orderDirection != null %}
                state.order.push([{{ column.index }}, '{{ column.orderDirection }}']);
                {% endif %}
                {% endfor %}

                return state;
            }
        });
        {% endif %}
        {% endif %}

        {% if datatable.option('searching') and datatable.setting('columnFilter') != null %}
        var search = \$.fn.dataTable.util.throttle(function (event) {
            if (event.type == \"keyup\") {
                if (
                    event.keyCode == 37 ||
                    event.keyCode == 38 ||
                    event.keyCode == 39 ||
                    event.keyCode == 40 ||
                    event.keyCode == 16 ||
                    event.keyCode == 17 ||
                    event.keyCode == 18
                )
                    return;
            }

            \$('#{{ datatable.setting('name') }}')
                .DataTable()
                .column(\$(event.currentTarget).data(\"search-column-index\"))
                .search(\$(this).val()).draw();
        }, options.searchDelay);

        \$('#{{ datatable.setting('name') }}').find(\"thead input, tfoot input\")
            .on(\"keyup change\", function () {
                var index = \$(this).data('search-column-index');
                \$('input[data-search-column-index=' + index + ']').val(\$(this).val());
            })
            .on(\"keyup change\", search);

        \$('#{{ datatable.setting('name') }}').find(\"thead select, tfoot select\")
            .on(\"keyup change\", function (event) {
                var searchValue = \$(this).val();
                searchValue = searchValue ? searchValue.toString() : '';

                \$('#{{ datatable.setting('name') }}')
                    .DataTable()
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(searchValue).draw();
            });
        {% endif %}

        {% if datatable.option('stateSave') %}
        {% for column in datatable.state.columns %}
        {% if column.filter != null %}{% include column.filter.templateJs %}{% endif %}
        {% endfor %}
        {% endif %}

        oTable.DataTable(defaults);
    });

    (function (\$) {
        \$.deparam = function (params, coerce) {
            var obj = {},
                coerce_types = {'true': !0, 'false': !1, 'null': null};
            \$.each(params.replace(/\\+/g, ' ').split('&'), function (j, v) {
                var param = v.split('='),
                    key = decodeURIComponent(param[0]),
                    val,
                    cur = obj,
                    i = 0,
                    keys = key.split(']['),
                    keys_last = keys.length - 1;

                if (/\\[/.test(keys[0]) && /\\]\$/.test(keys[keys_last])) {
                    keys[keys_last] = keys[keys_last].replace(/\\]\$/, '');
                    keys = keys.shift().split('[').concat(keys);
                    keys_last = keys.length - 1;
                } else {
                    keys_last = 0;
                }

                if (param.length === 2) {
                    val = decodeURIComponent(param[1]);

                    if (coerce) {
                        val = val && !isNaN(val) ? +val              // number
                            : val === 'undefined' ? undefined         // undefined
                                : coerce_types[val] !== undefined ? coerce_types[val] // true, false, null
                                    : val;                                                // string
                    }

                    if (keys_last) {
                        for (; i <= keys_last; i++) {
                            key = keys[i] === '' ? cur.length : keys[i];
                            cur = cur[key] = i < keys_last
                                ? cur[key] || (keys[i + 1] && isNaN(keys[i + 1]) ? {} : [])
                                : val;
                        }

                    } else {
                        if (\$.isArray(obj[key])) {
                            obj[key].push(val);
                        } else if (obj[key] !== undefined) {
                            obj[key] = [obj[key], val];
                        } else {
                            obj[key] = val;
                        }
                    }

                } else if (key) {
                    obj[key] = coerce
                        ? undefined
                        : '';
                }
            });

            return obj;
        };
    })(jQuery);
</script>
#}
", "@DataTables/datatable_js.html.twig", "/home/abdoukarim/Documents/appchambre/vendor/omines/datatables-bundle/src/Resources/views/datatable_js.html.twig");
    }
}
