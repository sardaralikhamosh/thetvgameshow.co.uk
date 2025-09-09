<div class="infinite-marquee">
    <div class="marquee-content">
        <label class="custom-moveing" style="color:#fff; font-weight: 700; font-size:24px;">
           + ***** ‘Proper gameshow atmosphere, funny host and lots of laughs‘ Ian, TripAdvisor + ****** ‘Excellent Experience’ Jason, TripAdvisor + ***** ‘A night of entertainment!’ James, TripAdvisor 
        </label>
    </div>
    <div class="marquee-content" aria-hidden="true">
        <label style="color:#fff; font-weight: 700; font-size:24px; line-height: 40px;">
            + ***** ‘Proper gameshow atmosphere, funny host and lots of laughs‘ Ian, TripAdvisor + ****** ‘Excellent Experience’ Jason, TripAdvisor + ***** ‘A night of entertainment!’ James, TripAdvisor
        </label>
    </div>
</div>

<style>
.custom-moving {
    font-family: Helvetica, sans-serif, !important;
    line-height: 40px;
}
.infinite-marquee {
    width: 100%;
    overflow: hidden;
    display: flex;
    white-space: nowrap;
    box-sizing: border-box;
    background: transparent; /* Change as needed */
}

.marquee-content {
    display: inline-block;
    animation: marquee 30s linear infinite;
    padding-right: 10px; /* Adjust spacing between copies */
}

.marquee-content label {
    font-family: Helvetica, sans-serif, !important;
    display: inline-block;
    padding-right: 50px; /* Adjust spacing between items */
}

@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}
</style>