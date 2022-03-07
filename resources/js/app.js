require("./bootstrap");

import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import persist from "@alpinejs/persist";
import intersect from "@alpinejs/intersect";

Alpine.plugin(intersect);
Alpine.plugin(persist);
Alpine.plugin(collapse);
window.Alpine = Alpine;

Alpine.start();