import React from 'react';

const Guide = props => (
    <section>
        <h2>Welcome to storybook</h2>
        <p>This is a UI component dev environment for your app.</p>
        <p>
            We've added some basic stories inside the <InlineCode>src/stories</InlineCode> directory.
            <br />
            A story is a single state of one or more UI components. You can have as many stories as you
            want.
            <br />
            (Basically a story is like a visual test case.)
        </p>
        <p>
            See these sample{' '}
            {props.showApp ? (
                <NavButton onClick={props.showApp}>stories</NavButton>
            ) : (
                <StoryLink kind={props.showKind} story={props.showStory}>
                    stories
                </StoryLink>
            )}{' '}
            for a component called <InlineCode>Button</InlineCode>
            .
        </p>
        <p>
            Just like that, you can add your own components as stories.
            <br />
            You can also edit those components and see changes right away.
            <br />
            (Try editing the <span>Button</span> stories located at{' '}
            <span>src/stories/index.js</span>.)
        </p>
        <p>
            Usually we create stories with smaller UI components in the app.<br />
            Have a look at the{' '}
            <a
                href="https://storybook.js.org/basics/writing-stories"
                target="_blank"
                rel="noopener noreferrer"
            >
                Writing Stories
            </a>
            section in our documentation.
        </p>
        <p>
            <b>NOTE:</b>
            <br />
            Have a look at the <InlineCode>.storybook/webpack.config.js</InlineCode> to add webpack
            loaders and plugins you are using in this project.
        </p>
    </section>
);

Guide.displayName = 'Guida';

export { Guide as default };