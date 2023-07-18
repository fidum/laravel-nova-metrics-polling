/* global Nova */
Nova.bootingCallbacks.unshift((app) => {
    app.mixin({
        data: () => ({
            pollingListener: null,
        }),
        mounted() {
            if (this.$props?.card?.pollingInterval && typeof this.fetch === 'function') {
                this.pollingListener = setInterval(() => {
                    this.fetch();
                }, this.$props?.card?.pollingInterval);
            }
        },
        unmounted() {
            clearInterval(this.pollingListener);
        },
    });
});
