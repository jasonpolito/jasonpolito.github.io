import { LDBX } from "./ldbx";

const database = new LDBX("tracker", true, true);
const tracker = database.where("name", "tracker").first();

if (!tracker) {
    database.save({
        name: "tracker",
        data: [
            {
                name: "count",
                value: 0,
            },
        ],
    });
}

const app = new Vue({
    el: "#app",
    data() {
        return {
            tracker,
        };
    },
    watch: {
        tracker: {
            handler(newValue, oldValue) {
                database.update(this.$data.tracker);
            },
            deep: true,
        },
    },
    methods: {
        buildDataPoint() {
            const dataPoint = {
                name: "New Data Point",
                value: 0,
            };
            this.tracker.data.push(dataPoint);
        },
    },
    beforeMount() {
        this.tracker = tracker;
    },
});
