import MultiSelect from "../../../../libs/multi-select";

const msEquipments = document.getElementById('multi-select-equipments');
const msBodyParts = document.getElementById('multi-select-body-parts');
const msMuscles = document.getElementById('multi-select-muscles');
const msProperties = document.getElementById('multi-select-properties');

if(msEquipments) {
    (new MultiSelect(msEquipments));
}

if(msBodyParts) {
    (new MultiSelect(msBodyParts));
}

if(msMuscles) {
    (new MultiSelect(msMuscles));
}

if(msProperties) {
    (new MultiSelect(msProperties));
}
