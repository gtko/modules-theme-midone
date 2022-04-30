
import Alpine from "alpinejs";
import FormsAlpinePlugin from '../../../../../vendor/filament/forms/dist/module.esm'
import Focus from '@alpinejs/focus'
import Tooltip from "@ryangjchandler/alpine-tooltip";

import cash from "cash-dom";
import TomSelect from "tom-select";
// import 'livewire-sortable'


Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(Focus)
Alpine.plugin(Tooltip)

window.cash = cash;
window.Alpine = Alpine;
window.TomSelect = TomSelect;
Alpine.start();
