import React, { Component } from 'react';
import BigCalendar from 'react-big-calendar';
import withDragAndDrop from 'react-big-calendar/lib/addons/dragAndDrop';
import momentIt from 'functions/rad/momentIt';
import validationSettings from "functions/rad/validationSettings";
import 'react-big-calendar/lib/css/react-big-calendar.css';
import 'react-big-calendar/lib/addons/dragAndDrop/styles.less';
import './style.css';

const localizer = BigCalendar.momentLocalizer(momentIt);
let messages = {
    "date": 'Data',
    "time": 'Ora',
    "event": 'Evento',
    "allDay": 'Tutto il giorno',
    "week": 'Settimana',
    "work_week": 'Settimana lavorativa',
    "day": 'Giorno',
    "month": 'Mese',
    "previous": 'Precedente',
    "next": 'Successivo',
    "yesterday": 'Ieri',
    "tomorrow": 'Domani',
    "today": 'Oggi',
    "agenda": 'Agenda',
    "noEventsInRange": 'Non ci sono eventi in questo intervallo.',
    "showMore": total => `altri ${ total }`,
};

const DragAndDropCalendar = withDragAndDrop(BigCalendar);

class DefaultCalendar extends Component {
    constructor(props) {
        super(props);

        this.state = {
            events: []
        };

        this.handleSelectEvent = this.handleSelectEvent.bind(this);
        this.handleSlotEvent = this.handleSlotEvent.bind(this);
        this.handleDropEvent = this.handleDropEvent.bind(this);
        this.handleResizeEvent = this.handleResizeEvent.bind(this);
        this.formatDate = this.formatDate.bind(this);
    }

    // noinspection JSMethodCanBeStatic
    formatDate(date) {
        return momentIt(date).format(validationSettings.dateFormat);
    }

    // noinspection JSMethodCanBeStatic
    handleSelectEvent(event) {
        alert("titolo: " + event.title +
            "\ninizia: " + this.formatDate(event.start) +
            "\nfinisce: " + this.formatDate(event.end));
    }

    handleSlotEvent({ start, end }) {
        const title = window.prompt('New Event name');
        if (title)
            this.setState({
                events: [
                    ...this.state.events,
                    {
                        start,
                        end,
                        title,
                    },
                ],
            })
    }

    handleDropEvent({ event, start, end, isAllDay: droppedOnAllDaySlot }) {
        const { events } = this.state;

        const idx = events.indexOf(event);
        let allDay = event.allDay;

        if (!event.allDay && droppedOnAllDaySlot) {
            allDay = true
        } else if (event.allDay && !droppedOnAllDaySlot) {
            allDay = false
        }

        const updatedEvent = { ...event, start, end, allDay };

        const nextEvents = [...events];
        nextEvents.splice(idx, 1, updatedEvent);

        this.setState({
            events: nextEvents,
        })

        //alert(`${event.title} was dropped onto ${updatedEvent.start}`)
    }

    handleResizeEvent = ({ event, start, end }) => {
        const { events } = this.state;

        const nextEvents = events.map(existingEvent => {
            return existingEvent.id === event.id
                ? { ...existingEvent, start, end }
                : existingEvent
        });

        this.setState({
            events: nextEvents,
        })

        //alert(`${event.title} was resized to ${start}-${end}`)
    };

    render() {
        return (
            <div className='defaultcalendar'>
                <DragAndDropCalendar
                    localizer={ localizer }
                    events={ this.state.events }
                    defaultView={ BigCalendar.Views.MONTH }
                    scrollToTime={ new Date(2000, 0, 1, 0) }
                    defaultDate={ new Date() }
                    messages={ messages }
                    onSelectEvent={ this.handleSelectEvent }
                    onSelectSlot={ this.handleSlotEvent }
                    onEventResize={ this.handleResizeEvent }
                    onEventDrop={ this.handleDropEvent }
                    resizable
                    selectable
                />
            </div>
        );
    }
}

export default DefaultCalendar;
