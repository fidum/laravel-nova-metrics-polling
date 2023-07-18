/* global Nova */
Nova.bootingCallbacks.unshift((app) => {
    app.mixin({
        data: () => ({
            pollingListener: null,
        }),
        mounted() {
            this.addCardPollingIntervalListener();
        },
        unmounted() {
            this.removeCardPollingIntervalListener();
        },
        updated() {
            this.addCardPollingIntervalListener();
        },
        methods: {
            addCardPollingIntervalListener() {
                this.removeCardPollingIntervalListener();
                if (this.$props?.card?.pollingInterval && typeof this.fetch === 'function') {
                    this.pollingListener = setInterval(this.fetch, this.$props.card.pollingInterval);
                }
            },
            removeCardPollingIntervalListener() {
                clearInterval(this.pollingListener);
            }
        }
    });
});
